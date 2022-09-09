<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::get('/top-rated', 'App\Http\Controllers\MovieAppController@getTopRated')->name('movie-app.top-rated');
Route::get('/now-playing', 'App\Http\Controllers\MovieAppController@getNowPlaying')->name('movie-app.now-playing');;
Route::get('/movie/{id}', 'App\Http\Controllers\MovieAppController@getMovieInformation')->name('movie-app.movie');;
Route::get('/search/{movieName}', 'App\Http\Controllers\MovieAppController@searchMovie')->name('movie-app.search-movie');;
