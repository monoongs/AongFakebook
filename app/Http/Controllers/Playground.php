<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class playground extends Controller
{
    public function getPlayground(){
        return view("playground");
    }
}
