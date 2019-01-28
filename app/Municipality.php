<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['municipality_name', 'city_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }
    public function places()
    {
        return $this->hasMany(\App\Place::class);
    }
}
