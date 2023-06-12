<?php

namespace App\Http\Repositories\Api;

use App\Http\Interfaces\Api\ArtistInterface;
use App\Http\Traits\apiResponseTrait;
use App\Http\Traits\ImageTrait;
use App\Models\Artist;

class  ArtistRepository  implements ArtistInterface
{
    use ImageTrait, apiResponseTrait;
    private $artistModel;
    public  function __construct(Artist $artistModel)
    {
        $this->artistModel = $artistModel;
    }


    public function create($request)
    {
        $artistImage = $this->uploadImage($request->image, $this->artistModel::PATH);

        $artists =   $this->artistModel::create
        ([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
            'image' => $artistImage,
            'city' => $request->city,
            'facebook_link' => $request->facebook_link
        ]);

        return $this->apiResponse(200, 'success', $artists);
    }

    public function getAllArtists()
    {
        $artists =   $this->artistModel::get(['id', 'name', 'description']);
        return $this->apiResponse(200, 'success', $artists);
    }

    public function  show($artist)
    {

        return $this->apiResponse(200, 'success', $artist);
    }

    public function search($name)
    {
        

        $search_artist = $this->artistModel::where('name', 'like', '%' . $name . '%')
            ->get();

        return $this->apiResponse(200, 'success', $search_artist);
    }


    public function newShow($request)
    {
        
    }
}
