<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBPractice extends Controller
{
    public function show($slug){
        $post=\DB::table('posts')->where('slug',$slug)->first();
        return view('practice',['post'=>$post]);
    }
}
