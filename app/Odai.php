<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odai extends Model
{
    protected $fillable = ['filename'];
    
    function bokes()
    {
        return $this->hasMany(Boke::class);
    }
}
