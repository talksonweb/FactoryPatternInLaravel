<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\MovieService\OmdbService;
use App\Http\Services\MovieService\TmdbService;
use App\Http\Services\MovieService\MovieFactory;

class AdminController extends Controller
{
    public function index()
    {
        // $movieService = new TmdbService();
        $movieService = MovieFactory::create();
        $movies = $movieService->getTopMovies(2);
        $topMovie = $movieService->getTopMovie();

        return response()->json(['movies' => $movies, 'topMovie' => $topMovie]);
    }
}
