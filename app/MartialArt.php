<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class MartialArt extends Model
{
    use SoftDeletes, Sluggable;

    protected $table = 'martial_art';

    protected $fillable = [
        'name', 'slug', 'created_at', 'updated_at'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function descipline()
    {
        return $this->hasMany(Descipline::class, 'martial_art_id', 'id');
    }
}
