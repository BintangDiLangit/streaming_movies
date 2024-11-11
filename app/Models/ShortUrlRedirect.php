<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortUrlRedirect extends Model
{
    protected $fillable = ['code', 'url', 'hits', 'film_id'];

    public function film(){
        return $this->belongsTo(Film::class);
    }
}
