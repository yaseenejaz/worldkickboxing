<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentTickets extends Model
{
    protected $table = 'tournament_tickets';

    protected $fillable = [
        'tournament_id', 'name', 'online_price', 'door_price', 'sold', 'status', 'created_at', 'updated_at'
    ];
}
