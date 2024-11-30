<?php

namespace App\Http\Services\MovieService\Providers;

use App\Http\Services\MovieService\MovieInterface;

class OmdbService implements MovieInterface {
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
            ['source' => 'OMDB', 'name' => 'Gone with the hurricane', 'genre' => ['suspense', 'thrilling']],
            ['source' => 'OMDB', 'name' => 'Avengers', 'genre' => ['suspense', 'thrilling', 'sci-fiction']],
            ['source' => 'OMDB', 'name' => 'Lost Island', 'genre' => ['horror', 'comedy']],
        ];
        
        return collect($movieList)->take($limit)->all(); 
    }

    public function getBestMovie()
    {
        return [ ['source' => 'OmdbDB', 'name' => 'Gone with the hurricane', 'genre' => ['suspense', 'thrilling']], ];
    }
}