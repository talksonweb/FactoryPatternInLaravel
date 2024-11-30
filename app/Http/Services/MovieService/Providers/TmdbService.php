<?php

namespace App\Http\Services\MovieService\Providers;

use App\Http\Services\MovieService\MovieInterface;

class TmdbService implements MovieInterface {
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.movie_db.tmdb_key'); 
    }

    public function getTopMovies(int $limit)
    {
        // GET the API with the key 
        
        // return results from API
        $movieList = [
            ['source' => 'TMDB', 'name' => 'Gone with the hurricane', 'genre' => ['suspense', 'thrilling']],
            ['source' => 'TMDB', 'name' => 'Avengers', 'genre' => ['suspense', 'thrilling', 'sci-fiction']],
            ['source' => 'TMDB', 'name' => 'Lost Island', 'genre' => ['horror', 'comedy']],
        ];
        
        return collect($movieList)->take($limit)->all(); 
    }

    public function getBestMovie()
    {
        return [ ['source' => 'TMDB', 'name' => 'Lost Island', 'genre' => ['horror', 'comedy']] ];
    }
}