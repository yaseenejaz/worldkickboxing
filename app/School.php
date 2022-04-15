<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class School extends Model
{
    use SoftDeletes, Sluggable;

    protected $table = 'schools';

    protected $fillable = [
        'name', 'slug', 'logo', 'user_id', 'tournament_id', 'place_of_origin', 'phone', 'contact_email', 'contact_phone', 'line1', 'line2', 'city',
        'postal_code', 'state', 'country', 'created_at', 'updated_at'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
