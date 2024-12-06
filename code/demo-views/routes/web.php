<?php
use App\Http\Controllers\AdminPostController;
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

// Route::get("admin/post/add", [AdminPostController::class, "add"]);


//master layout tinh ke thua
// Route::get("child", function(){
//     return view("child", ['data' => 4]);
// });

Route::get("for", function(){
 return view("for",['i' => 20]);
});

//foreach laravel
Route::get("foreach", function(){

    $users = array(
        1 => array(
            'name' => 'Nguyễn Thanh Phong'
        ),
        2 => array(
            'name' => 'Lê Văn Sĩ'
        ),
    );

    return view("foreach", compact('users'));
});

//ex view

Route::get("/admin/post/add", [AdminPostController::class, "add"]);
Route::get("/admin/post/show", [AdminPostController::class, "show"]);
Route::get("/admin/post/update/{id}", [AdminPostController::class, "update"]);
Route::get("/admin/post/delete/{id}", [AdminPostController::class, "delete"]);
