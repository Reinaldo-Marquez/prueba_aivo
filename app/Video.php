<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

    public function scopeTitle($query, $title)
    {
        if ($title) {
            return $query->where('title', 'LIKE', "%$title%");
        }
    }
}
