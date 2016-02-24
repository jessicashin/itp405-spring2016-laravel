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

    protected $hidden = [
        'release_date',
        'label_id',
        'sound_id',
        'format_id',
        'created_at',
        'updated_at',
        'genre',
        'rating'
    ];

    public function rating() {
        return $this->belongsTo('App\Models\Rating');
    }
    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }
    public function label() {
        return $this->belongsTo('App\Models\Label');
    }

}
