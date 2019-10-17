<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'age', 'adress', 'introduction'
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function favoritings()
    {
        return $this->belongsToMany(Post::class, 'favorites', 'user_id', 'post_id')->withTimestamps();
    }
    
    public function favoritted()
    {
        return $this->belongsToMany(Post::class, 'favorites', 'post_id', 'user_id')->withTimestamps();
    }
    
    public function favorite($postId)
    {
        $exist = $this->is_favoriting($postId);
        
        if ($exist){
            return false;
        }else{
            $this->favoritings()->attach($postId);
            return true;
        }
    }
    
    public function unfavorite($postId)
    {
        $exist = $this->is_favoriting($postId);
        
        if($exist){
            $this->favoritings()->detach($postId);
            return true;
        }else{
            return false;
        }
    }
    
    public function is_favoriting($postId)
    {
        return $this->favoritings()->where('post_id', $postId)->exists();
    }
    
    public function ageToString() {
        return \Config::get("age.".$this->age);
    }
    
    public function adressToString() {
        return \Config::get("adress.".$this->adress);
    }
}
