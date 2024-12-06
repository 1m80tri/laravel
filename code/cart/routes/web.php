<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

Route::get("/",[ProductController::class, "show"]);

Route::get("/cart/show", [CartController::class, "show"]);

Route::get("/cart/add/{id}", [CartController::class, "add"])->name("cart.add");

Route::get("/cart/delete/{rowId}", [CartController::class, "delete"])->name("cart.delete");

Route::get("/cart/destroy", [CartController::class, "destroy"])-> name("cart.destroy");

Route::post("/cart/update", [CartController::class, "update"])-> name("cart.update");