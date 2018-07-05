<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boke extends Model
{
     protected $fillable = ['content', 'user_id', 'odai_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function odai()
     {
        return $this->belongsTo(Odai::class);
    }
    
    public function favorite_users()
    {
        return $this->belongsToMany(Boke::class, 'user_favorite', 'favorite_id', 'user_id')->withTimestamps();
     }
}
