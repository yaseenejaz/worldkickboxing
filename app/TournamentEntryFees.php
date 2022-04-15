<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentEntryFees extends Model
{
    protected $table = 'tournament_entry_fees';

    protected $fillable = [
        'tournament_id', 'currency_id', 'pricing_id', 'fee_per_competitor', 'fee_per_category', 'currency_short_title', 'created_at', 'updated_at'
    ];
}
