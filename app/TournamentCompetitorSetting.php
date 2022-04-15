<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentCompetitorSetting extends Model
{
    protected $table = 'tournament_competitor_setting';

    protected $fillable = [
        'tournament_id', 'title', 'label', 'color', 'created_at', 'updated_at'
    ];
}
