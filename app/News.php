<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'title', 'url', 'text', 'user_id', 'created_at'
    ];

    public function comments() {
        return $this->hasMany('App\Comment', 'article_id');
    }
}
