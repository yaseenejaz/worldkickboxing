<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterSetting extends Model
{
    protected $table = 'tournament_register_setting';

    protected $fillable = [
        'tournament_id', 'status', 'open_for', 'school_created_by', 'allow_amendments', 'max_categories_per_competitor',
        'auto_assign_competitor_numbers', 'created_at', 'updated_at'
    ];
}
