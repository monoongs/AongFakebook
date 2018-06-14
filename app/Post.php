<?php

namespace App;

use App\User;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comment(){
        return $this->hasMany(Comment::class,'post_id');
    }

    public function user(){
        return $this->belongTo(Comment::Class,'user_id');
    }
}
