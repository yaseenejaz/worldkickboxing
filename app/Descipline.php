<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Descipline extends Model
{
    use SoftDeletes, Sluggable;

    protected $table = 'desciplines';

    protected $fillable = [
        'name', 'slug', 'martial_art_id', 'format', 'created_at', 'updated_at'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public const desciplineFormat = [
        1 => ["id" => 1, "label" => 'Head-to-head', "text" => "In a head-to-head event, two competitors play against each other to achieve a win, like in boxing.", "checked" => "checked"],
        2 => ["id" => 2, "label" => 'Scorecard', "text" => "In a scorecard event, each competitor comes up individually to achieve a score, like in figureskating.", "checked" => ""],
    ];

}
