<?php

namespace App\Http\Controllers\Admin\Film;

use App\Helpers\StoreHelper;
use App\Http\Controllers\Controller;
use App\Jobs\UploadVideoJob;
use App\Models\Film;
use App\Models\VideoUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }
    public function index(Request $request)
    {
        $datas = Film::query();

        if ($request->has('search')) {
            $datas->where('title', 'like', '%' . request('search') . '%');
        }

        $datas = $datas->orderBy('created_at', 'desc')->paginate(5)->withQueryString();
        return view('admin.pages.film.index', compact('datas'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'video_file' => 'required|file|mimetypes:video/mp4,video/mpeg,video/quicktime',
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
            ]);

            DB::beginTransaction();

            $video = $request->file('video_file');
            $tempVideoPath = storage_path('app/tmp_videos/' . $video->getClientOriginalName());
            $video->move(storage_path('app/tmp_videos/'), $video->getClientOriginalName());


            $addVideo = $this->client->request('POST', 'https://video.bunnycdn.com/library/' . env('BUNNY_LIBRARY_ID') . '/videos', [
                'body' => '{"title":"' . $request->title . '"}',
                'headers' => [
                    'AccessKey' => env('BUNNY_ACCESS_KEY'),
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);

            $addVideo = $addVideo->getBody();

            $responseData = json_decode($addVideo, true);
            $videoId = $responseData['guid'];

            VideoUpload::create([
                'video_id' => $videoId,
                'video_path' => $tempVideoPath,
                'status' => 'processing',
            ]);

            UploadVideoJob::dispatch($tempVideoPath, $videoId);

            Film::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'total_minute' => 0,
                'path_src_vidio' => "https://iframe.mediadelivery.net/play/" . env('BUNNY_LIBRARY_ID') . "/" . $videoId,
                'path_thumbnail' => StoreHelper::store($request->file('thumbnail'), 'thumbnails'),
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Film created successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('admin.pages.film.edit', compact('film'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'total_minute' => 'required',
            'video_file' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/quicktime',
            'thumbnail' => 'nullable|file|image|mimes:jpeg,png,jpg|max:20480',
        ]);

        $video = $request->file('video_file');
        $tempVideoPath = storage_path('app/tmp_videos/' . $video->getClientOriginalName());
        $video->move(storage_path('app/tmp_videos/'), $video->getClientOriginalName());

        if ($video) {

            $addVideo = $this->client->request('POST', 'https://video.bunnycdn.com/library/' . env('BUNNY_LIBRARY_ID') . '/videos', [
                'body' => '{"title":"' . $request->title . '"}',
                'headers' => [
                    'AccessKey' => env('BUNNY_ACCESS_KEY'),
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);

            $addVideo = $addVideo->getBody();

            $responseData = json_decode($addVideo, true);
            $videoId = $responseData['guid'];

            VideoUpload::create([
                'video_id' => $videoId,
                'video_path' => $tempVideoPath,
                'status' => 'processing',
            ]);

            UploadVideoJob::dispatch($tempVideoPath, $videoId);

            $dataUpdate = [
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'total_minute' => $request->total_minute,
                'path_src_vidio' => "https://iframe.mediadelivery.net/play/" . env('BUNNY_LIBRARY_ID') . "/" . $videoId,
            ];
        } else {
            $dataUpdate = [
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'total_minute' => $request->total_minute
            ];
        }


        if ($request->hasFile('thumbnail')) {
            $dataUpdate['path_thumbnail'] = StoreHelper::store($request->file('thumbnail'), 'thumbnails');
        }

        $film = Film::findOrFail($id);
        $film->update($dataUpdate);

        return redirect()->back()->with('success', 'Film updated successfully');
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
}
