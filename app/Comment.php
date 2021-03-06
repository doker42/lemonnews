<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'text', 'username', 'user_id', 'comment_id', 'created_at', 'article_id'
    ];
}
