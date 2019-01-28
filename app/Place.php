<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['place_name', 'municipality_id'];

    public function municipality()
    {
        return $this->belongsTo(\App\Municipality::class);
    }
    public function people()
    {
        return $this->hasMany(\App\Person::class);
    }
}
