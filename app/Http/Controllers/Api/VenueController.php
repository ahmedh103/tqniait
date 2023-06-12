<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Api\VenueInterface;
use App\Http\Requests\VenueRequest\createVenueRequest;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    private $venueInterface;

    public function __construct(VenueInterface  $venueInterface )
    {
        $this->venueInterface = $venueInterface;
    }
    public  function create(createVenueRequest $request){

        return  $this->venueInterface->create($request);

    }

    public function getAllVenues(){

        return $this->venueInterface->getAllVenues();

    }
    public function show(Venue $venue){
        return  $this->venueInterface->show($venue);

    } 

    public function   search($name){

        return $this->venueInterface->search($name);

    }

}
