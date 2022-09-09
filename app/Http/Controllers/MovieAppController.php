<?php

namespace App\Http\Controllers;

use App\Models\MovieApp;
use App\Http\Requests\StoreMovieAppRequest;
use App\Http\Requests\UpdateMovieAppRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Type\Integer;

class MovieAppController extends Controller
{
    /**
     * Get the top-rated movies on TMDB.
     *
     * @return JsonResponse
     */
    public function getTopRated(): JsonResponse
    {
        $status = 0;
        $title = 'Get top-rated movies';
        $msg = 'Get top-rated movies failed!';
        $data = [];
        $code = 200;

        $request = 'https://api.themoviedb.org/3/movie/top_rated?api_key=' . config('global.tmdb_key');
        $response = Http::get($request);

        if(!$response->failed()){
            $status = 1;
            $msg = 'Get top-rated movies succeeded!';
            $data = $response['results'];
            $code = 201;
        }

        return response()->json([
            'status' => $status,
            'title' => $title,
            'msg' => $msg,
            'data' => $data
        ], $code);

    }

    /**
     * Get a list of movies in theatres. This is a release type query that looks for all movies that have a release type of 2 or 3 within the specified date range.
     *
     * @return JsonResponse
     *
     */
    public function getNowPlaying(): JsonResponse
    {
        $status = 0;
        $title = 'Now playing movies';
        $msg = 'Get top rated movies failed!';
        $data = [];
        $code = 200;

        $request = 'https://api.themoviedb.org/3/movie/now_playing?api_key=' . config('global.tmdb_key');
        $response = Http::get($request);

        if(!$response->failed()){
            $status = 1;
            $msg = 'Get now playing movies succeeded!';
            $data = $response->json();
            $code = 201;
        }

        return response()->json([
            'status' => $status,
            'title' => $title,
            'msg' => $msg,
            'data' => $data
        ], $code);
    }

    /**
     * Get the primary information about a movie.
     *
     * @param Int $id
     * @return JsonResponse
     */
    public function getMovieInformation(Int $id): JsonResponse
    {
        $status = 0;
        $title = 'Movie information';
        $msg = 'Get movie information failed!';
        $data = [];
        $code = 200;

        $request = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . config('global.tmdb_key');
        $response = Http::get($request);

        if(!$response->failed()){
            $status = 1;
            $msg = 'Get movie information succeeded!';
            $data = $response->json();
            $code = 201;
        }

        return response()->json([
            'status' => $status,
            'title' => $title,
            'msg' => $msg,
            'data' => $data
        ], $code);
    }

    /**
     * Search for a movie by related word.
     *
     * @param String $movieName
     * @return view
     */
    public function searchMovie(String $movieName)
    {
        $status = 0;
        $title = 'Search moviedb';
        $msg = 'Search moviedb failed!';
        $data = [];
        $code = 200;

        $request = 'https://api.themoviedb.org/3/search/movie?&api_key=04c35731a5ee918f014970082a0088b1&query=' . $movieName;
        $response = Http::get($request)->json();

        if(!$response->failed()){
            $status = 1;
            $msg = 'Search moviedb succeeded!';
            $data = $response->json();
            $code = 201;
        }

        return response()->json([
            'status' => $status,
            'title' => $title,
            'msg' => $msg,
            'data' => $data
        ], $code);
        //return view('welcome')->with('topRated', $response['results']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return view
     * @throws Exception
     */
    public function index()
    {
        $topRated = 'https://api.themoviedb.org/3/movie/top_rated?api_key='  . config('global.tmdb_key');
        $responseTopRated = Http::get($topRated)->json();

        $playingNow = 'https://api.themoviedb.org/3/movie/now_playing?api_key=' . config('global.tmdb_key');
        $responsePlayingNow = Http::get($playingNow)->json();

        //return view('welcome')->with('topRated', $responseTopRated)->with('playingNow', $responsePlayingNow);
        return view('welcome')->with('topRated', $responseTopRated['results'])->with('playingNow', $responsePlayingNow['results']);
        //return view('welcome')->with('hola', $hola);
    }
}
