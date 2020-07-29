<?php

use App\Http\Controllers\PracticeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/posts/{post}','DatabaseController@show');
// Route::get('/1',function(){
//     $name=request('name');
//     return $name;
// });

// Route::get('/posts/{post}',function($post){
//     //return view('post');
//     //return ('<h2>'.$post.'</h2>');

//     $posts=['my-first-post'=>'Welcome to my blog!',
//             'my-second-post'=>'I am getting laraval'
//     ];
//     if(! array_key_exists($post,$posts)){
//         return abort(403
//     ,"Nothing here yet!!");
//     }
//     return view('post',[
//         'post'=> $posts[$post]
//     ]);

// });

// Route::get('/practise/{post}',function($post){
//     $arr=['kish'=>'Hey guys what up!!!',
//           'tank'=>'Yo what up!!'
//     ];
//     if(! array_key_exists($post,$arr)){
//         return abort(404);
//     }
//     else{
//     return view('practice',['post'=>$arr[$post]]);
// }});
Route::get('/practise/{post}','PracticeController@show');
Route::get('/practise/{post','DBPractice@show');
