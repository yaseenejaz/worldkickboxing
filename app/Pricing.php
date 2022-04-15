<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $table = 'pricing';

    protected $fillable = [
        'model', 'created_at', 'updated_at'
    ];
}
