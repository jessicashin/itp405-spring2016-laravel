<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create($id) {
        $movie = DB::table('dvds')
            ->select('title', 'dvds.id', 'rating_name', 'genre_name', 'label_name', 'sound_name', 'format_name')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
            ->join('genres', 'dvds.genre_id', '=', 'genres.id')
            ->join('labels', 'dvds.label_id', '=', 'labels.id')
            ->join('sounds', 'dvds.sound_id', '=', 'sounds.id')
            ->join('formats', 'dvds.format_id', '=', 'formats.id')
            ->where('dvds.id', $id);
        $movie = $movie->first();
        return view('reviews', [
            'movie' => $movie,
            'reviews' => Review::all($id)
        ]);
    }

    public function store(Request $request) {
        $validation = Validator::make($request->all(), [
            'rating' => 'numeric|between:1,10',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'dvd_id' => 'required|integer'
        ]);

        if ($validation->fails()) {
            return $validation->errors()->all();
//            return redirect()->back()
//                ->withInput()
//                ->withErrors($validation);
        }

        $review = new Review([
            'rating' => $request->input('rating'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'dvd_id' => $request->input('dvd_id')
        ]);
        $review->save();

        return redirect()->back()->with('success', true);
    }
}
