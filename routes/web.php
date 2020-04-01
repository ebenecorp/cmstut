<?php

use App\User;
use App\Role;
use App\Photo;
use App\Country;
use App\Tag;

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

// Route::get('/insert', function(){
//             DB::insert('insert into posts(title, content, author, is_admin) values(?, ?, ?, ?)', ['Php tutorial', 'Laravel is what i am learning', 'Ebene', 0]);
//     }


// );
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
// Route::get('/user/{id}/post', function($id){

//     return User::find($id)->post;

// });


// |--------------------------------------------------------------------------
// | Eloquents 
//  One to One relationship reversed
// |--------------------------------------------------------------------------
// |

// Route::get('/post/{id}/user', function($id){

//     Return Post::find($id)->user->email;

// });



// |--------------------------------------------------------------------------
// | Eloquents 
//  One to Many relationship reversed
// |--------------------------------------------------------------------------
// |
 
// Route::get('/posts', function(){
//     $user = User::find(1);

//     foreach($user->posts as $post){
//             echo $post->content .'<br>';
//     }

// });

// |--------------------------------------------------------------------------
// | Eloquents 
//  Many to Many relationship reversed
// |--------------------------------------------------------------------------
// |

    // Route::get('/posts/{id}', function($id){
    //     $user = User::find($id)->roles;

    //     return $user;
       
       
    //     // foreach($user->roles as $role){
    //     //     echo $role->name;
    //     // }


    // });

    
// |--------------------------------------------------------------------------
// | Eloquents 
//  Many to Many relationship reversed
// |--------------------------------------------------------------------------
// |


    // Route::get('/user/{id}', function($id){

    //         $role = Role::find($id)->users;

    //         return $role;

    // });

    
// |--------------------------------------------------------------------------
// | Eloquents 
//  Querying intermmediate/pivot tables
// |--------------------------------------------------------------------------
// |

    // Route::get('/user/pivot', function(){

    //     $user = User::find(1);

    //     foreach($user->roles as $role){

    //         return $role->pivot->created_at;
    //     }

    // });

    
// |--------------------------------------------------------------------------
// | Eloquents 
//  Using BelongsToMany Through
// |--------------------------------------------------------------------------
// |

//     Route::get('/user/country', function(){
//         // $country = Country::find(1);

//         $country = Country::find(4);

//         foreach($country->posts as $post){
//             return $post->title;
//         }


//    });

       
// |--------------------------------------------------------------------------
// | Eloquents 
//  Using BelongsToMany Through
// |--------------------------------------------------------------------------
// |

//    Route::get('/user/photos', function (){
//         $user = User::find(1);

//         foreach($user->photos as $photo){
//             return $photo;
//         }

//    });

   
//    Route::get('/post/{id}/photos', function ($id){
//     $post = Post::find($id);

//     foreach($post->photos as $photo){
//         echo $photo->path.'<br>';
//     }

// });

    Route::get('/photo/{id}', function($id){

        $photo = Photo::findOrFail($id);

            return $photo->imageable;
    });

    // |--------------------------------------------------------------------------
// | Eloquents 
//  Polymorphic relations
// |--------------------------------------------------------------------------
// |
        Route::get('/post/tag', function(){

            $post = Post::find(1);

            foreach ($post->tags as $tag){
                    return $tag->name;
            }

        });

        Route::get('/tag/post', function (){
            $tag = Tag::find(2);

            foreach($tag->posts as $post){

                echo $post->author;
            }

        });

        Route::get('/tag/video', function (){
            $tag = Tag::find(1);

            foreach($tag->videos as $video){

                return $video->name;
            }

        });