<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ProfileController extends Controller
{
    public function showProfile($id,$user){
        
        // $posts = Post::orderBy('created_at', 'desc')->get();
        
        // $comments = App\Comment::where('user_id', $id)->orderBy('id', 'desc')->get()

        $posts = Post::where('user_id',$id)->orderBy('id','desc')->get();
        
        return view('profile',['posts' => $posts,'id' => $id ,'user' => $user ]);
    }
}
