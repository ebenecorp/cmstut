<?php

// use App\User;
// use App\Role;
// use App\Photo;
// use App\Country;
// use App\Tag;

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

// Route::get('/posts/{id}', function($id){

//     return " This is posts number ".$id;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home ',function(){
//         $url = route('admin.home');

//         return "this url is ". $url;

// }));

// Route::get('/posts', 'PostController@index');

// Route::get('/posts/{id}', 'PostController@index');

// Route::resource('posts', 'PostController');

//  Route::get('/contact', 'PostController@contact');
// //Route::get('/contact/{id}', 'PostController@contact');

// Route::get('/posts/{id}/{name}/{password}', 'PostController@postView');
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

//     foreach($posts as $posts){
//         return $posts->title;
//     }

// });


// Route::get('/find{id}', function ($id) {


//     $posts = Post::find($id);

//     return $posts->content;


// });

// Route::get('/findwhere', function(){

//     $posts = Post::where('is_admin', 1)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;


// });


// Route::get('/findmore', function(){

//     $posts = Post::where('is_admin', '<', 2)->firstOrFail();

//     return $posts;


// });

// Route::get('/basicinsert', function(){

//     $posts = new Post;

//     $posts->title= ' Eloquent insert';
//     $posts->content = 'this is an insert statement using eloquent.';
//     $posts->author = 'mr bean';
//     $posts->is_admin= 2;
//     $posts->save();


// });

// Route::get('/basicupdate', function(){

//     $posts = Post::find(2);

//     $posts->title = 'THis is a posts title';
//     $posts->author = 'Mr. Fire Odinkemere';


//     $posts->save();

// });

// Route::get('/create', function(){

//         $posts = Post::create(['title'=>'a created posts', 'content'=>'A created posts content', 'author'=>'Mr MX dean',
//                             'is_admin'=>0]);


// });

// Route::get('/update', function(){
//         Post::where('id', 2)->where('is_admin', 1)->update(['title'=>'new title update']);



// });

// Route::get('/delete', function(){

//     // $posts = Post::find(5);

//     // $posts->delete();

//     Post::destroy(6);


// });

// Route::get('/softdelete', function(){

//     Post::find(2)->delete();



// });

// Route::get('/readsoftdelete', function(){

//     // $posts = Post::find(1);

//     // return $posts;

//     // $posts = Post::withTrashed()->where('id', 1)->get();
//     // return $posts;

//     $posts = Post::onlyTrashed()->where('is_admin', 1)->get();
//     return $posts;



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
// Route::get('/user/{id}/posts', function($id){

//     return User::find($id)->posts;

// });


// |--------------------------------------------------------------------------
// | Eloquents
//  One to One relationship reversed
// |--------------------------------------------------------------------------
// |

// Route::get('/posts/{id}/user', function($id){

//     Return Post::find($id)->user->email;

// });



// |--------------------------------------------------------------------------
// | Eloquents
//  One to Many relationship reversed
// |--------------------------------------------------------------------------
// |

// Route::get('/posts', function(){
//     $user = User::find(1);

//     foreach($user->posts as $posts){
//             echo $posts->content .'<br>';
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

//         foreach($country->posts as $posts){
//             return $posts->title;
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


//    Route::get('/posts/{id}/photos', function ($id){
//     $posts = Post::find($id);

//     foreach($posts->photos as $photo){
//         echo $photo->path.'<br>';
//     }

// });

//     Route::get('/photo/{id}', function($id){

//         $photo = Photo::findOrFail($id);

//             return $photo->imageable;
//     });

//     // |--------------------------------------------------------------------------
// // | Eloquents
// //  Polymorphic relations
// // |--------------------------------------------------------------------------
// // |
//         Route::get('/posts/tag', function(){

//             $posts = Post::find(1);

//             foreach ($posts->tags as $tag){
//                     return $tag->name;
//             }

//         });

        // Route::get('/tag/posts', function (){
        //     $tag = Tag::find(2);

        //     foreach($tag->posts as $posts){

        //         echo $posts->author;
        //     }

        // });

        // Route::get('/tag/video', function (){
        //     $tag = Tag::find(1);

        //     foreach($tag->videos as $video){

        //         return $video->name;
        //     }

        // });


        //     // |--------------------------------------------------------------------------
    // // CRUD APPLICATION
// //
// // |--------------------------------------------------------------------------
// // |

 Route::resource('/posts', 'PostController');
