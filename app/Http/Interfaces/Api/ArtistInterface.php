<?php
namespace App\Http\Interfaces\Api;

interface ArtistInterface
{

    public function create($request);

    public function getAllArtists();

    public function show($artist);

    public function search($name);
     
    public function newShow($request);
}
