<?php

namespace App\Jobs;

use App\Models\VideoUpload;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class UploadVideoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $videoPath;
    protected $videoId;

    /**
     * Create a new job instance.
     */
    public function __construct($videoPath, $videoId)
    {
        $this->videoPath = $videoPath;
        $this->videoId = $videoId;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Log::info("Starting video upload for video ID: {$this->videoId}");

        $client = new Client([
            'timeout' => 300,
            'connect_timeout' => 30,
        ]);
        try {

            if (!file_exists($this->videoPath)) {
                Log::error("File does not exist at path: {$this->videoPath}");
                \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'error']);
                return;
            }

            if (!is_readable($this->videoPath)) {
                Log::error("File is not readable at path: {$this->videoPath}");
                \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'error']);
                return;
            }

            Log::info("Video Path: {$this->videoPath}");

            // Upload video to BunnyCDN
            // $response = $client->request('PUT', "https://video.bunnycdn.com/library/" . env('BUNNY_LIBRARY_ID') . "/videos/{$this->videoId}", [
            //     'body' => fopen($this->videoPath, 'rb'),
            //     'headers' => [
            //         'AccessKey' => env('BUNNY_ACCESS_KEY'),
            //         'Content-Type' => 'application/octet-stream',
            //     ],
            // ]);

            $chunkSize = 5 * 1024 * 1024; // 5MB chunks
            $fileSize = filesize($this->videoPath);
            $handle = fopen($this->videoPath, 'rb');

            for ($offset = 0; $offset < $fileSize; $offset += $chunkSize) {
                $chunk = fread($handle, $chunkSize);

                $client->request('PUT', "https://video.bunnycdn.com/library/" . env('BUNNY_LIBRARY_ID') . "/videos/{$this->videoId}", [
                    'body' => $chunk,
                    'headers' => [
                        'AccessKey' => env('BUNNY_ACCESS_KEY'),
                        'Content-Type' => 'application/octet-stream',
                        'Content-Range' => "bytes {$offset}-" . min($offset + $chunkSize - 1, $fileSize - 1) . "/{$fileSize}",
                    ],
                ]);
            }

            fclose($handle);

            // Mark upload as done
            VideoUpload::where('video_id', $this->videoId)->update(['status' => 'done']);
            Log::info("Video uploaded successfully: {$this->videoId}");
        } catch (\Exception $e) {
            Log::error("Error uploading video: {$e->getMessage()}");
            VideoUpload::where('video_id', $this->videoId)->update(['status' => 'failed']);
        }
    }
}
