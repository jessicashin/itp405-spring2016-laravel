<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    protected $fillable = [
        'title',
        'genre_id',
        'rating_id',
        'label_id',
        'sound_id',
        'format_id'
    ];
}
