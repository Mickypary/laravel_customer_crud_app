<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['country_id', 'name'];

    function cities()
    {
        return $this->hasMany(City::class);
    }
}
