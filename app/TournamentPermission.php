<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentPermission extends Model
{
    protected $table = 'tournament_permission';

    protected $fillable = [
        'tournament_id', 'name', 'email', 'level', 'status', 'created_at', 'updated_at'
    ];
}
