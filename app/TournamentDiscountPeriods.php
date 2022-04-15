<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentDiscountPeriods extends Model
{
    protected $table = 'tournament_discount_periods';

    protected $fillable = [
        'tournament_id', 'name', 'start', 'end', 'amount', 'type', 'per', 'created_at', 'updated_at'
    ];
}
