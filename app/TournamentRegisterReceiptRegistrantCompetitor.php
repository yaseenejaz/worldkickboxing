<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterReceiptRegistrantCompetitor extends Model
{
    protected $table = 'tournament_register_receipt_registrant_competitor';

    protected $fillable = [
        'tournament_id', 'enabled', 'subject', 'custom_text', 'created_at', 'updated_at'
    ];
}
