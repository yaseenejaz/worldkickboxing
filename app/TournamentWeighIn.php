<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentWeighIn extends Model
{
    protected $table = 'tournament_weigh_in';

    protected $fillable = [
        'tournament_id', 'event_id', 'weigh_in', 'attempts', 'tolerance', 'enforce_minimum_weights', 'created_at', 'updated_at'
    ];
}
