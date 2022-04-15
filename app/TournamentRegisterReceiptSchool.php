<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterReceiptSchool extends Model
{
    protected $table = 'tournament_register_receipt_school';

    protected $fillable = [
        'tournament_id', 'enabled', 'subject', 'created_at', 'updated_at'
    ];
}
