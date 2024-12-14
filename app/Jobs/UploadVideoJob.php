<?php

namespace App\Jobs;

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
            $response = $client->request('PUT', "https://video.bunnycdn.com/library/" . env('BUNNY_LIBRARY_ID') . "/videos/{$this->videoId}", [
                'body' => fopen($this->videoPath, 'rb'),
                'headers' => [
                    'AccessKey' => env('BUNNY_ACCESS_KEY'),
                    'Content-Type' => 'application/octet-stream',
                ],
            ]);

            Log::info("==== Response Store to Bunny ====");
            Log::info("BunnyCDN Response: " . $response->getBody()->getContents());
            Log::info("BunnyCDN Status Code: " . $response->getStatusCode());
            Log::info("=================================");

            if ($response->getStatusCode() === 200) {
                Log::info("Video uploaded successfully: {$this->videoId}");
                \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'done']);
            } else {
                Log::error("Failed to upload video: {$this->videoId}");
                \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'failed']);
            }
        } catch (\Exception $e) {
            Log::error("Error uploading video: {$e->getMessage()}");
            \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'failed']);
        }
    }
}
