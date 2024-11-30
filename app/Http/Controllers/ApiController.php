<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\MovieService\OmdbService;
use App\Http\Services\MovieService\MovieFactory;

class ApiController extends Controller
{
    public function index()
    {
        // $movieService = new OmdbService();
        $movieService = MovieFactory::create();
        $movies = $movieService->getTopMovies(2);
        $topMovie = $movieService->getBestMovie();

        return response()->json(['movies' => $movies, 'topMovie' => $topMovie]);
    }
}
