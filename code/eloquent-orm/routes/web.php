<?php
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get("/post/add", [PostController::class, 'add']);

// //lay danh sach du lieu
// Route::get("/post/show", [PostController::class, 'show']);

// //update post
// Route::get("post/update/{id}", [PostController::class, "update"]);

//ex query
// Route::get("product/get",[ProductController::class, "getList"]);

// Route::get("product/add",[ProductController::class, "add"]);

// Route::get("product/update/{id}",[ProductController::class, "update"]);

// Route::get("product/delete/{id}",[ProductController::class, "delete"]);

//eloquent orm
Route::get("/post/read", function(){
    $posts = Post::all();
    return $posts;
});

Route::get("/post/getList", [PostController::class, "getList"]);

Route::get("/post/update/{id}",[PostController::class, "update"]);

Route::get("/post/add", [PostController::class, "add"]);

Route::get("post/delete/{id}",[PostController::class, "delete"]);

Route::get("/post/permanentDelete/{id}", [PostController::class, "permanentDelete"]);

Route::get("/post/restore/{id}", [PostController::class, "restore"]);