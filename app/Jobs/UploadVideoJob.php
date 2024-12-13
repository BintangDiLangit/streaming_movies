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
        $client = new Client();

        try {
            // Upload video to BunnyCDN
            $response = $client->request('PUT', "https://video.bunnycdn.com/library/" . env('BUNNY_LIBRARY_ID') . "/videos/{$this->videoId}", [
                'body' => file_get_contents($this->videoPath),
                'headers' => [
                    'AccessKey' => env('BUNNY_ACCESS_KEY'),
                    'Content-Type' => 'application/octet-stream',
                ],
            ]);

            if ($response->getStatusCode() === 200) {
                Log::info("Video uploaded successfully: {$this->videoId}");
                \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'done']);
            } else {
                Log::error("Failed to upload video: {$this->videoId}");
                \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'failed']);
            }
        } catch (\Exception $e) {
            Log::error("Error uploading video: {$e->getMessage()}");
            \App\Models\VideoUpload::where('video_id', $this->videoId)->update(['status' => 'error']);
        }
    }
}
