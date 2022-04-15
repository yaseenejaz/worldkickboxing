<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentActiveCategories extends Model
{
    protected $table = 'tournament_active_categories';

    protected $fillable = [
        'tournament_id', 'publish_a_list_of_active_categories', 'created_at', 'updated_at'
    ];
}
