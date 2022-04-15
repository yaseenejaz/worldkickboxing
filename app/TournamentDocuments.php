<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentDocuments extends Model
{
    protected $table = 'tournament_documents';

    protected $fillable = [
        'tournament_id', 'name', 'file', 'created_at', 'updated_at'
    ];
}
