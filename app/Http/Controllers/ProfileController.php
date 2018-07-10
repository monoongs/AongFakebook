<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ProfileController extends Controller
{
    public function showProfile($user){
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        // $user =
        
        return view('profile',['posts' => $posts,'user' => $user]);
    }
}
