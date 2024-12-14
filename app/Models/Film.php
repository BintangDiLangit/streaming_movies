<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    protected $fillable = [
        'title',
        'slug',
        'description',
        'total_minute',
        'path_thumbnail',
        'path_src_vidio',
        'video_id'
    ];


    public function uploadVideo()
    {
        return $this->hasOne(VideoUpload::class, 'video_id', 'video_id');
    }
}
