<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Post extends Model
{
    public function comment(){
        return $this->hasMany(Comment::class,'post_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');

        
    }
}
