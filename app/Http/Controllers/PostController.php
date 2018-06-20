<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function newPost(request $request){
    $post = new Post;;
    $post->user_id = $request->id;
    $post->body=$request->posttext;

    $post->save();
    return back();
    }
}
