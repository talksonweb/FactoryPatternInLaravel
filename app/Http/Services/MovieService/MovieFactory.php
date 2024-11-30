<?php

namespace App\Http\Services\MovieService;

use App\Models\GeneralSetting;

class MovieFactory
{
    public static function create()
    {
        // $movieService = 'AnnedbService';
        // $movieService = config('services.movie_db.connection');
        $movieService = GeneralSetting::first()->movie_service;
        
        $namespace = 'App\\Http\\Services\\MovieService\\Providers\\';

        if ( ! class_exists($namespace . $movieService)) {
            return throw new \Exception('Could not find the Service', 400);
        }

        return new ($namespace . $movieService);
    }
}