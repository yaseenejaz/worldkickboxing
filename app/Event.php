<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use SoftDeletes, Sluggable;

    protected $table = 'events';

    protected $fillable = [
        'name', 'slug', 'user_id', 'tournament_id', 'martial_art_id', 'descipline_id', 'format', 'position', 'identifier',
        'cover_photo', 'created_at', 'updated_at'
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
