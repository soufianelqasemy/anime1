<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'title',
        'synopsis',
        'image_url',
        'episodes',
        'score',
        'mal_id' // MyAnimeList ID
    ];
}
