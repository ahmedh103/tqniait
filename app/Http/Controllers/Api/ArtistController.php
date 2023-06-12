<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Api\ArtistInterface;
use App\Http\Requests\ArtistRequest\createArtistRequest;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    private $artistInterface;

    public function __construct(ArtistInterface  $artistInterface )
    {
        $this->artistInterface = $artistInterface;
    }
    public  function create(createArtistRequest $request){

        return  $this->artistInterface->create($request);

    }

    public function getAllArtists(){

        return $this->artistInterface->getAllArtists();

    }

    public function show(Artist $artist){
        return  $this->artistInterface->show($artist);

    } 

    public function   search($name){

        return $this->artistInterface->search($name);

    }
}
