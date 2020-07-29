<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post){
        $posts=[
            'my-first-post'=> 'Hello, this is my first blog.',
            'my-second-post'=> 'Now I am getting a hang of laravel database creation.'
        ];

        if(! array_key_exists($post,$posts)){
            abort(404,'Page not found');
        }

        return view('post',['post' => $posts[$post]]);
    }
}
