<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function show($post){

        $arr=[
            'kish'=>'New practice 1',
            'kis'=>'New Practice 2'
        ];
    if(! array_key_exists($post,$arr)){
        return abort(404);
    }
    else{
        return view('practice',['post'=>$arr[$post]]);
    }
}
}
