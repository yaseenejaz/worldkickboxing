<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentRegisterIndividual extends Model
{
    protected $table = 'tournament_register_individual';

    protected $fillable = [
        'tournament_id', 'strict_divisions', 'email', 'phone', 'school_contact_phone', 'win_loss_record', 'competitor_photos',
        'created_at', 'updated_at'
    ];
}
