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


// Route::get('/', function () {
//     return view('welcome');
// });


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

//  Route::get('/contact', 'PostController@contact');
// //Route::get('/contact/{id}', 'PostController@contact');

// Route::get('/post/{id}/{name}/{password}', 'PostController@postView');
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Reading databases using raw sql
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/insert', function(){
            DB::insert('insert into posts(title, content, author, is_admin) values(?, ?, ?, ?)', ['Php tutorial', 'Laravel is what i am learning', 'Ebene', 0]);
    }


);
// Route::get('/read', function(){

//    $results= DB::select('select * from posts where id = ?', [1]);

//    foreach($results as $result){

//         return var_dump($result);
//    }

// });

// Route::get('/update', function(){

//     $results = DB::update('update posts set title = "New Title"  where id = ?', [1]);
//     return $results;

// });

Route::get('/delete', function(){

    $results = DB::delete('delete posts where id = ?', [1]);

    return $results;

});
