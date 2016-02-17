<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Dvd;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Label;
use App\Models\Sound;
use App\Models\Format;

class DvdController extends Controller
{
    public function search() {
        $genres = DB::table('genres')->get();
        $ratings = DB::table('ratings')->get();

        return view('search', [
            'genres' => $genres,
            'ratings' => $ratings
        ]);
    }

    public function results(Request $request) {
        $searchTerm = $request->input('dvd');

        $genre = $request->input('genre');
        $rating = $request->input('rating');

        $movies = DB::table('dvds')
            ->select('title', 'dvds.id', 'rating_name', 'genre_name', 'label_name', 'sound_name', 'format_name')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
            ->join('genres', 'dvds.genre_id', '=', 'genres.id')
            ->join('labels', 'dvds.label_id', '=', 'labels.id')
            ->join('sounds', 'dvds.sound_id', '=', 'sounds.id')
            ->join('formats', 'dvds.format_id', '=', 'formats.id')
            ->orderBy('dvds.id')
            ->where('title', 'like', "%$searchTerm%");

        if ($rating) {
            $movies = $movies->where('rating_name', '=', $rating);
        }

        if ($genre) {
            $movies = $movies->where('genre_name', '=', $genre);
        }

        $movies = $movies->get();

        return view('results', [
            'dvds' => $movies,
            'searchTerm' => $searchTerm,
            'genre' => $genre,
            'rating' => $rating
        ]);
    }


    public function create() {


        return view('create', [
            'genres' => Genre::all(),
            'ratings' => Rating::all(),
            'labels' => Label::all(),
            'sounds' => Sound::all(),
            'formats' => Format::all()
        ]);
    }

//    public function store(Request $request) {
//
//        return view('create', [
//            'genres' => $genres,
//            'ratings' => $ratings
//        ]);
//    }

}
