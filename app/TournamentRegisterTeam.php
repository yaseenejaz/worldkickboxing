<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterTeam extends Model
{
    protected $table = 'tournament_register_team';

    protected $fillable = [
        'tournament_id', 'strict_team_divisions', 'created_at', 'updated_at'
    ];
}
