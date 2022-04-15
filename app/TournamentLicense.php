<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentLicense extends Model
{
    protected $table = 'tournament_license';

    protected $fillable = [
        'tournament_id', 'ask_for_license', 'form_label', 'help_text', 'created_at', 'updated_at'
    ];
}
