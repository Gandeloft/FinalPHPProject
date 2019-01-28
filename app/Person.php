<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['oib', 'firstName', 'place_id', 'lastName'];

    public function place()
    {
        return $this->belongsTo(\App\Place::class);
    }
}
