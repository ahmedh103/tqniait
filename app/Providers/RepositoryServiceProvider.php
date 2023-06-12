<?php

namespace App\Providers;

use App\Http\Interfaces\Api\ArtistInterface;
use App\Http\Interfaces\Api\ArtistVenueInterface;
use App\Http\Interfaces\Api\VenueInterface;
use App\Http\Repositories\Api\ArtistRepository;
use App\Http\Repositories\Api\ArtistVenueRepository;
use App\Http\Repositories\Api\VenueRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
        $this->app->bind(
           VenueInterface::class,
           VenueRepository::class
        );

        $this->app->bind(
            ArtistInterface::class,
            ArtistRepository::class
         );

         $this->app->bind(
            ArtistVenueInterface::class,
            ArtistVenueRepository::class
         );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
