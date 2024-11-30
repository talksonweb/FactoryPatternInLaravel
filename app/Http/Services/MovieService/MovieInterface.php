<?php

namespace App\Http\Services\MovieService;

interface MovieInterface
{
    public function getTopMovies(int $limit);
    public function getBestMovie();
}