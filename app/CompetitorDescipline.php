<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitorDescipline extends Model
{
    protected $table = 'competitor_descipline';

    protected $fillable = [
        'competitor_id', 'descipline_id'
    ];
}
