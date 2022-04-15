<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterReceiptHost extends Model
{
    protected $table = 'tournament_register_receipt_host';

    protected $fillable = [
        'tournament_id', 'enabled', 'subject', 'created_at', 'updated_at'
    ];
}
