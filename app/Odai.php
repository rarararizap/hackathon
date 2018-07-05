<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odai extends Model
{
    function bokes()
    {
        return $this->hasMany(Boke::class);
    }
}
