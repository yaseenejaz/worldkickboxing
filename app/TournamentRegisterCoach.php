<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterCoach extends Model
{
    protected $table = 'tournament_register_coach';

    protected $fillable = [
        'tournament_id', 'enable_coaches', 'coach_online_registrations', 'coach_photos', 'created_at', 'updated_at'
    ];
}
