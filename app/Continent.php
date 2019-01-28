<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = ['continent_name', 'native_name'];
    public function countries()
    {
        return $this->hasMany(\App\Country::class);
    }
}
