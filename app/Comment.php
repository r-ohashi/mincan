<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'content','user_id'];
    
    public function post()
    {
        return $this->belongsTo(Posts::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
