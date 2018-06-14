<?php

namespace App;

use App\Post;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->belongTo(Post::class,'user_id');
    }

    public function user(){
        return $this->belongTo(Post::class,'post_id');
    }
}
