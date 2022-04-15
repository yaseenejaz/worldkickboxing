<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentVenue extends Model
{
    protected $table = 'tournament_venue';

    protected $fillable = [
        'tournament_id', 'name', 'address', 'lat', 'long', 'country', 'created_at', 'updated_at'
    ];
}
