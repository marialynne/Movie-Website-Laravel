<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieAppController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/top-rated', 'App\Http\Controllers\MovieAppController@getTopRated')->name('movie-app.top-rated');
Route::get('/now-playing', 'App\Http\Controllers\MovieAppController@getNowPlaying')->name('movie-app.now-playing');;
Route::get('/movie/{id}', 'App\Http\Controllers\MovieAppController@getMovieInformation')->name('movie-app.movie');;
Route::get('/search/{movieName}', 'App\Http\Controllers\MovieAppController@searchMovie')->name('movie-app.search-movie');;

Route::get('/index', 'App\Http\Controllers\MovieAppController@index')->name('index.search-movie');

Route::get('/', [MovieAppController::class, 'index'])->name('index');

