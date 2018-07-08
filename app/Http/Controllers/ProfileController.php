<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ProfileController extends Controller
{
    public function showProfile(){
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        
        return view('profile',['posts' => $posts]);
    }
}
