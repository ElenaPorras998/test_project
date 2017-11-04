<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'author_id',
        'title',
        'published_at',
        'finished_reading_at',
        'my_review',
        'my_rating'
    ];
}