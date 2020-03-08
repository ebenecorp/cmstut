<?php

use App\User;

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

// Route::get('/delete', function(){

//     $results = DB::delete('delete from posts where id = ?', [1]);

//     return $results;

// });
  
// |--------------------------------------------------------------------------
// | Eloquents 
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */
use App\Post;

// Route::get('/read', function () {


//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->title;
//     }
    
// });


// Route::get('/find{id}', function ($id) {


//     $post = Post::find($id);

//     return $post->content;
    
    
// });

// Route::get('/findwhere', function(){

//     $posts = Post::where('is_admin', 1)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;


// });


// Route::get('/findmore', function(){

//     $post = Post::where('is_admin', '<', 2)->firstOrFail();

//     return $post;


// });

// Route::get('/basicinsert', function(){

//     $post = new Post;

//     $post->title= ' Eloquent insert';
//     $post->content = 'this is an insert statement using eloquent.';
//     $post->author = 'mr bean';
//     $post->is_admin= 2;
//     $post->save();


// });

// Route::get('/basicupdate', function(){

//     $post = Post::find(2);

//     $post->title = 'THis is a post title';
//     $post->author = 'Mr. Fire Odinkemere';


//     $post->save();

// });

// Route::get('/create', function(){

//         $post = Post::create(['title'=>'a created post', 'content'=>'A created post content', 'author'=>'Mr MX dean',
//                             'is_admin'=>0]);


// });

// Route::get('/update', function(){
//         Post::where('id', 2)->where('is_admin', 1)->update(['title'=>'new title update']);



// });

// Route::get('/delete', function(){

//     // $post = Post::find(5);

//     // $post->delete();

//     Post::destroy(6);


// });

// Route::get('/softdelete', function(){

//     Post::find(2)->delete();



// });

// Route::get('/readsoftdelete', function(){

//     // $post = Post::find(1);

//     // return $post;

//     // $post = Post::withTrashed()->where('id', 1)->get();
//     // return $post;

//     $post = Post::onlyTrashed()->where('is_admin', 1)->get();
//     return $post;



// });

// Route::get('/restore', function(){

//     Post::onlyTrashed()->where('is_admin', 1)->restore();


// });

// Route::get('/forcedelete', function(){

//     Post::onlyTrashed()->where('is_admin', 1)->forcedelete();

// });

// |--------------------------------------------------------------------------
// | Eloquents Relationship
//  One to one relationship
// |--------------------------------------------------------------------------
// |
Route::get('/user/{id}/post', function($id){

    return User::find($id)->post;

});