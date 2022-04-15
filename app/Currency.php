<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';

    protected $fillable = [
        'short_title', 'long_title', 'created_at', 'updated_at'
    ];
}
