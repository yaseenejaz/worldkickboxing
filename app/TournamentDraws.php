<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentDraws extends Model
{
    protected $table = 'tournament_draws';

    protected $fillable = [
        'tournament_id', 'bracketing_strategy', 'avoid_consecutive_bouts', 'print_extra_space', 'print_draw_hints', 'created_at', 'updated_at'
    ];
}
