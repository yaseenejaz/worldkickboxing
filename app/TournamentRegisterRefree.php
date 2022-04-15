<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterRefree extends Model
{
    protected $table = 'tournament_register_refree';

    protected $fillable = [
        'tournament_id', 'enable_refrees', 'refree_online_registration', 'refree_photos', 'refree_rank', 'refree_classification',
        'created_at', 'updated_at'
    ];
}
