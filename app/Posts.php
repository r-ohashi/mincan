<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title', 'user_id', 'way', 'style', 'age', 'content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function ageToString() {
        return \Config::get("age.".$this->age);
    }
    
    public function styleToString() {
        return \Config::get("style.".$this->style);
    }
}
