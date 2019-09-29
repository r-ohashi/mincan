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
}
