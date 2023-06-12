<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Api\ArtistVenueInterface;
use App\Http\Requests\ArtistVenueRequest\createArtistVenueRequest;
use Illuminate\Http\Request;

class ArtistVenueController extends Controller
{
    
    private $artistvenueInterface;

    public function __construct(ArtistVenueInterface  $artistvenueInterface )
    {
        $this->artistvenueInterface = $artistvenueInterface;
    }
    public  function create(createArtistVenueRequest $request){
      
        return  $this->artistvenueInterface->create($request);
        
    }
}
