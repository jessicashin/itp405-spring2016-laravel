<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Dvd;

class GenreController extends Controller
{
    public function show($id) {
        $genre = Genre::find($id);
        $dvds = Dvd::with('rating', 'genre', 'label')->where('genre_id','=',$id)->get();

        return view('genre', [
            'genre' => $genre,
            'dvds' => $dvds
        ]);
    }
}
