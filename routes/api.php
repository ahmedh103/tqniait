<?php

use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\ArtistVenueController;
use App\Http\Controllers\Api\VenueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(
    [
        'controller' => VenueController::class,
        'prefix' => 'venue'

    ],
    function () {
        Route::post('/create', 'create');
        Route::get('/get-all-venue', 'getAllVenues');
        Route::get('/show/{venue}', 'show');
        Route::get('/search/{name}', 'search');
    }

);

Route::group(
    [
        'controller' => ArtistController::class,
        'prefix' => 'artist'

    ],
    function () {
        Route::post('/create', 'create');
        Route::get('/get-all-arist', 'getAllArtists');
        Route::get('/show/{artist}', 'show');
        Route::get('/search/{name}', 'search');
    }

);

Route::group(
    [
        'controller' => ArtistVenueController::class,
        'prefix' => 'artist-venue'

    ],
    function () {
        Route::post('/create-new-shows', 'create');
     
    }

);


