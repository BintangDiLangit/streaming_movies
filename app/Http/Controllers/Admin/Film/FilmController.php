<?php

namespace App\Http\Controllers\Admin\Film;

use App\Helpers\StoreHelper;
use App\Http\Controllers\Controller;
use App\Jobs\UploadVideoJob;
use App\Models\Film;
use App\Models\VideoUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FilmController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function index(Request $request)
    {
        try {
            $datas = Film::query();

            if ($request->has('search')) {
                $datas->where('title', 'like', '%' . $request->search . '%');
            }

            $datas = $datas->with('uploadVideo')->orderBy('created_at', 'desc')->paginate(5)->withQueryString();

            // Optimize: Only query the videos where the status is not `done` or `failed`
            $pendingUploads = VideoUpload::whereNotIn('status', ['done', 'failed'])->get();

            if ($pendingUploads->isNotEmpty()) {
                try {
                    $client = new \GuzzleHttp\Client();

                    foreach ($pendingUploads as $videoUpload) {
                        $response = $client->request('GET', 'https://video.bunnycdn.com/library/' . env('BUNNY_LIBRARY_ID') . '/videos/' . $videoUpload->video_id, [
                            'headers' => [
                                'AccessKey' => env('BUNNY_ACCESS_KEY'),
                                'accept' => 'application/json',
                            ],
                        ]);

                        $videoData = json_decode($response->getBody(), true);

                        // Update the `status` in the database based on BunnyCDN's response
                        if ($videoData['status'] === 1) { // Video is ready
                            $videoUpload->update(['status' => 'done']);
                        } elseif ($videoData['status'] === 2) { // Video is still processing
                            $videoUpload->update(['status' => 'processing']);
                        } elseif ($videoData['status'] === 3) { // Video processing failed
                            $videoUpload->update(['status' => 'failed']);
                        }
                    }
                } catch (\Exception $e) {
                    // Log any errors during the BunnyCDN API call
                    Log::error("Error updating video status: " . $e->getMessage());
                }
            }

            return view('admin.pages.film.index', compact('datas'));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            abort(500);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
            ]);

            DB::beginTransaction();

            $fileName = $request->input('video_file_name');
            Log::info("File Name : " . $fileName);
            $tempVideoPath = storage_path('app/tmp_videos/' . $fileName);
            Log::info("Temp File Path : " . $tempVideoPath);

            if (!file_exists($tempVideoPath)) {
                throw new \Exception("The uploaded video file does not exist: $tempVideoPath");
            }

            $addVideoResponse = $this->client->request('POST', 'https://video.bunnycdn.com/library/' . env('BUNNY_LIBRARY_ID') . '/videos', [
                'body' => '{"title":"' . $request->title . '"}',
                'headers' => [
                    'AccessKey' => env('BUNNY_ACCESS_KEY'),
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);

            $responseData = json_decode($addVideoResponse->getBody(), true);
            $videoId = $responseData['guid'];

            Log::info("======");
            Log::info($responseData);
            Log::info($videoId);
            Log::info("======");

            $film = Film::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'total_minute' => 0,
                'path_src_vidio' => "https://iframe.mediadelivery.net/play/" . env('BUNNY_LIBRARY_ID') . "/" . $videoId,
                'path_thumbnail' => StoreHelper::store($request->file('thumbnail'), 'thumbnails'),
                'video_id' => $videoId,
            ]);

            VideoUpload::create([
                'video_id' => $videoId,
                'video_path' => $tempVideoPath,
                'status' => 'processing',
            ]);

            DB::commit();


            Log::info("==== Video Upload Created ===");

            UploadVideoJob::dispatch($tempVideoPath, $videoId);

            Log::info("==== Processing Job ===");


            return response()->json([
                'status' => 'success',
                'message' => 'Film created successfully',
                'data' => $film,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error("Error Add Film");
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('admin.pages.film.edit', compact('film'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'total_minute' => 'required',
                'thumbnail' => 'nullable|file|image|mimes:jpeg,png,jpg|max:20480',
            ]);

            $dataUpdate = [
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'total_minute' => $request->total_minute,
            ];

            if ($request->hasFile('thumbnail')) {
                $dataUpdate['path_thumbnail'] = StoreHelper::store($request->file('thumbnail'), 'thumbnails');
            }

            $fileName = $request->input('video_file_name');
            $videoFilePath = storage_path('app/tmp_videos/' . $fileName);


            if ($videoFilePath && file_exists($videoFilePath)) {
                // Step 1: Create a new video entry in BunnyCDN
                $addVideoResponse = $this->client->request('POST', 'https://video.bunnycdn.com/library/' . env('BUNNY_LIBRARY_ID') . '/videos', [
                    'body' => '{"title":"' . $request->title . '"}',
                    'headers' => [
                        'AccessKey' => env('BUNNY_ACCESS_KEY'),
                        'accept' => 'application/json',
                        'content-type' => 'application/json',
                    ],
                ]);

                $responseData = json_decode($addVideoResponse->getBody(), true);
                $videoId = $responseData['guid'];

                // Step 2: Create a VideoUpload entry
                VideoUpload::create([
                    'video_id' => $videoId,
                    'video_path' => $videoFilePath,
                    'status' => 'processing',
                ]);

                // Step 3: Dispatch the job to upload the video in the background
                UploadVideoJob::dispatch($videoFilePath, $videoId);

                // Update the film with placeholders for the video
                $dataUpdate['path_src_vidio'] = "https://iframe.mediadelivery.net/play/" . env('BUNNY_LIBRARY_ID') . "/" . $videoId;
                $dataUpdate['video_id'] = $videoId;
            }

            $film = Film::findOrFail($id);
            $film->update($dataUpdate);
            return response()->json([
                'status' => 'success',
                'message' => 'Film updated successfully. Video is being processed.',
                'data' => $film,
            ]);
        } catch (\Throwable $th) {
            Log::error("Error Update Film");
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->back()->with('success', 'Film deleted successfully');
    }

    public function getStatus($videoId)
    {
        $videoUpload = VideoUpload::where('video_id', $videoId)->firstOrFail();
        return response()->json(['status' => $videoUpload->status]);
    }

    public function uploadChunk(Request $request)
    {
        $request->validate([
            'chunk' => 'required|file',
            'chunkIndex' => 'required|integer',
            'totalChunks' => 'required|integer',
            'fileName' => 'required|string',
        ]);

        $tempDir = storage_path('app/tmp_videos/chunks_' . $request->fileName);
        $finalFilePath = storage_path('app/tmp_videos/' . $request->fileName);

        if (!file_exists($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

        $chunk = $request->file('chunk');
        $chunk->move($tempDir, $request->chunkIndex);

        if ($request->chunkIndex + 1 == $request->totalChunks) {


            if (is_dir($finalFilePath)) {
                Log::info("$finalFilePath is a directory.");
            } elseif (is_file($finalFilePath)) {
                Log::info("$finalFilePath is a file.");
                unlink($finalFilePath);
            } else {
                Log::info("$finalFilePath does not exist.");
            }

            $outFile = fopen($finalFilePath, 'wb');
            for ($i = 0; $i < $request->totalChunks; $i++) {
                $chunkFile = $tempDir . '/' . $i;

                if (!file_exists($chunkFile)) {
                    throw new \Exception("Chunk $i not found at $chunkFile");
                }

                $inFile = fopen($chunkFile, 'rb');
                while ($buffer = fread($inFile, 8192)) {
                    fwrite($outFile, $buffer);
                }
                fclose($inFile);
                unlink($chunkFile);
            }

            fclose($outFile);
            $this->deleteDirectory($tempDir);

            return response()->json(['message' => 'File uploaded successfully', 'path' => $finalFilePath]);
        }

        return response()->json(['message' => 'Chunk uploaded successfully']);
    }

    function deleteDirectory($dir)
    {
        if (!is_dir($dir)) {
            return false;
        }

        $files = array_diff(scandir($dir), ['.', '..']);
        foreach ($files as $file) {
            $filePath = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_dir($filePath)) {
                $this->deleteDirectory($filePath);
            } else {
                unlink($filePath);
            }
        }

        return rmdir($dir);
    }
}
