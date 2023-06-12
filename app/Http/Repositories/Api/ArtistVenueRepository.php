<?php

namespace App\Http\Repositories\Api;

use App\Http\Interfaces\Api\ArtistVenueInterface;
use App\Http\Traits\apiResponseTrait;
use App\Http\Traits\ImageTrait;
use App\Models\AV;

class  ArtistVenueRepository  implements ArtistVenueInterface
{
    use ImageTrait, apiResponseTrait;
    private $artistvenueModel;
    public  function __construct(AV $artistvenueModel)
    {
        $this->artistvenueModel = $artistvenueModel;
    }


    public function create($request)
    {
       

        $artistsVenues =   $this->artistvenueModel::create
        ([
            'artist_id' => $request->artist_id,
            'venue_id' => $request->venue_id,
            'start_time' => $request->start_time
          
        ]);
       
        return $this->apiResponse(200, 'success', $artistsVenues);
    }

   

   
}
