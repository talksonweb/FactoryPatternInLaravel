<?php

namespace App\Http\Controllers;

use App\Http\Services\MovieService\MovieFactory;
use Illuminate\Http\Request;
use App\Http\Services\MovieService\OmdbService;
use App\Http\Services\MovieService\TmdbService;

class MovieController extends Controller
{
    public function index()
    {
        // $movieService = new TmdbService();
        $movieService = MovieFactory::create();
        $movies = $movieService->getTopMovies(2);
        $topMovie = $movieService->getBestMovie();

        return response()->json(['movies' => $movies, 'topMovie' => $topMovie]);
    }
}
