<?php

namespace App\Http\Repositories\Api;

use App\Http\Interfaces\Api\VenueInterface;
use App\Http\Traits\apiResponseTrait;
use App\Http\Traits\ImageTrait;
use App\Models\Venue;

class  VenueRepository  implements VenueInterface
{
    use ImageTrait, apiResponseTrait;
    private $venueModel;
    public  function __construct(Venue $venueModel)
    {
        $this->venueModel = $venueModel;
    }


    public function create($request)
    {
        $venueImage = $this->uploadImage($request->image, $this->venueModel::PATH);

        $venues =   $this->venueModel::create
        ([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
            'image' => $venueImage,
            'city' => $request->city,
            'facebook_link' => $request->facebook_link
        ]);

        return $this->apiResponse(200, 'success', $venues);
    }

    public function getAllVenues()
    {
        $venues =   $this->venueModel::get(['id', 'name', 'description']);
        return $this->apiResponse(200, 'success', $venues);
    }

    public function  show($venue)
    {

        return $this->apiResponse(200, 'success', $venue);
    }

    public function search($name)
    {
        

        $search_venue = $this->venueModel::where('name', 'like', '%' . $name . '%')
            ->get();

        return $this->apiResponse(200, 'success', $search_venue);
    }
}
