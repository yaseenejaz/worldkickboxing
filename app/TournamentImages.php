<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentImages extends Model
{
    protected $table = 'tournament_images';

    protected $fillable = [
        'tournament_id', 'logo', 'secondary_logo', 'cover_photo', 'facebook_photo', 'created_at', 'updated_at'
    ];
}
