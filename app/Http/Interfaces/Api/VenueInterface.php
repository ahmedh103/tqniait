<?php
namespace App\Http\Interfaces\Api;

interface VenueInterface
{

    public function create($request);

    public function getAllVenues();

    public function show($venue);

    public function search($name);
}
