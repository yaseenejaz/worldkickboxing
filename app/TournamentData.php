<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentData extends Model
{
    protected $table = 'tournament_license';

    protected $fillable = [
        'tournament_id', 'privacy_policy', 'erase_data', 'created_at', 'updated_at'
    ];
}
