<?php

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


// Route::get('/about', function () {
//     return "HI, I am About Page";
// });


// Route::get('/contact', function () {
//     return  "HI, YOU ARE VIEWING CONTACT US";
// });

// Route::get('/post/{id}', function($id){

//     return " This is post number ".$id;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home ',function(){
//         $url = route('admin.home');

//         return "this url is ". $url;

// }));

// Route::get('/post', 'PostController@index');

// Route::get('/post/{id}', 'PostController@index');

// Route::resource('post', 'PostController');

 Route::get('/contact', 'PostController@contact');
//Route::get('/contact/{id}', 'PostController@contact');

Route::get('/post/{id}/{name}/{password}', 'PostController@postView');
