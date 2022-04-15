<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Competitor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'school_id', 'tournament_id', 'event_id', 'phone', 'email', 'gender', 'nationality', 'dob', 'age', 'weight',
        'address', 'city', 'postal_code', 'state', 'country', 'license_number', 'created_at', 'updated_at'
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
