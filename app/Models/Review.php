<?php

namespace App\Models;
use DB;

class Review {
    public function __construct($data)
    {
        $this->dvd_id = $data['dvd_id'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->rating = $data['rating'];
    }

    public function save()
    {
        DB::table('reviews')->insert([
            'title' => $this->title,
            'description' => $this->description,
            'dvd_id' => $this->dvd_id,
            'rating' => $this->rating
        ]);
    }

    public static function all($dvd)
    {
        return DB::table('reviews')
            ->where('dvd_id', $dvd)
            ->orderBy('reviews.id')
            ->get();
    }
}
