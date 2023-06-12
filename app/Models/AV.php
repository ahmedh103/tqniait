<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AV extends Model
{
    use HasFactory;

    protected $table = 'artist_venue';
    protected $fillable = [
        'artist_id',
        'venue_id',
        'start_time'
    ];
}
