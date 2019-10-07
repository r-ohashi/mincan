<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'post_id', 'email', 'password', 'age', 'adress', 'introduction'
    ];
    
    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
