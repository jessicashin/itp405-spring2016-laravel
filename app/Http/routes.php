<?php
use App\Services\API\Flickr;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/dvds/search', 'DvdController@search');
    Route::get('/dvds', 'DvdController@results');
    Route::get('/dvds/create', 'DvdController@create');
    Route::post('/dvds/create', 'DvdController@store');
    Route::get('/dvds/{id}', 'ReviewController@create');
    Route::post('/dvds/{id}', 'ReviewController@store');
    Route::get('/genres/{id}/dvds', 'GenreController@show');
});

Route::group([ 'prefix' => 'api/v1', 'namespace' => 'API' ], function() {
    Route::get('genres', 'GenreController@index');
    Route::get('genres/{id}', 'GenreController@show');
    Route::get('dvds', 'DvdController@index');
    Route::get('dvds/{id}', 'DvdController@show');
    Route::post('dvds', 'DvdController@store');
});

Route::get('/flickr/{username}', function ($username) {
    $flickr = new Flickr([
        'api_key' => 'ba81959ac2eb3de25244fbd03cf2bbbe'
    ]);

    $userID = $flickr->userID($username);
    $photos = $flickr->userPhotos($userID);

    return view('flickr', [
        'photos' => $photos,
        'username' => $username
    ]);
});