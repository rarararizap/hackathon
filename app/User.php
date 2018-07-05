<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function bokes()
     {
        return $this->hasMany(Boke::class);
     }
    
    public function favorite_bokes()
     {
        return $this->belongsToMany(Boke::class, 'user_favorite', 'user_id', 'favorite_id')->withTimestamps();
     }
}
