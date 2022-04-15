<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentDiscountCodes extends Model
{
    protected $table = 'tournament_discount_codes';

    protected $fillable = [
        'tournament_id', 'name', 'code', 'discount_value', 'per', 'status', 'created_at', 'updated_at'
    ];
}
