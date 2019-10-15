<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'user_id', 'way', 'style', 'place','age','date1','date2', 'content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function styleToString() {
        return \Config::get("style.".$this->style);
    }
    
    const WANTED_AGES = ['特になし', '10代', '20代', '30代', '40代', '50代', '60代', '70代〜'];

    public function getAgeAttribute($value)
    {
        $ages = [];
        foreach (explode(',', $value) as $code) {
            $ages[] = Post::WANTED_AGES[$code];
        }
        return $ages;
    }
    
    const WANTED_PLACES = ['‐‐','北海道', '青森', '岩手', '宮城', '秋田', '山形', '福島',
                            '茨城', '栃木', '群馬', '埼玉', '千葉', '東京', '神奈川',
                            '新潟', '富山', '石川', '福井', '山梨', '長野', '岐阜', '静岡', '愛知',
                            '三重', '滋賀', '京都', '大阪', '兵庫', '奈良', '和歌山',
                            '鳥取', '島根', '岡山', '広島', '山口', '徳島', '香川', '愛媛', '高知',
                            '福岡', '佐賀', '長崎', '熊本', '大分', '宮崎', '鹿児島', '沖縄'];

    public function getPlaceAttribute($value)
    {
        $places = [];
        foreach (explode(',', $value) as $code) {
            $places[] = Post::WANTED_PLACES[$code];
        }
        return $places;
    }
}