<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "ownerable_id",
        "ownerable_type",
        "name",
        "url",
        "extension",
        "size",
        "mime"
    ];

    public function getFullPathAttribute() {
        return asset($this->url . $this->name . '.' . $this->extension);
    }
}
