<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    protected $table = 'short_urls';
    protected $fillable = ['code', 'url', 'hits'];
}