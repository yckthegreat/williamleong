<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'name',
        'designation',
        'email',
        'qualification',
        'experience',
        'position_held',
        'background',
        'sequence'
    ];

    public function image() {
        return $this->morphOne(Media::class, 'ownerable')->latest();
    }

}
