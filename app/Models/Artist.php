<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    const PATH = 'images/gallery';
    protected $fillable = [
        'name',
        'address',
        'image',
        'city',
        'description',
        'phone',
        'facebook_link'
    ];
    public function venues()
    {
        return $this->belongsToMany('App\Models\Venue','artist_venue');
    }

    public function getImageAttribute($value):string
    {
        return $this::PATH.DIRECTORY_SEPARATOR.$value;
    }
}
