<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentAdvancePricing extends Model
{
    protected $table = 'tournament_advance_pricing_rule';

    protected $fillable = [
        'tournament_id', 'name', 'condition', 'value', 'price', 'priority', 'created_at', 'updated_at'
    ];
}
