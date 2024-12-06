<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function add() {
        DB::table('products')
        ->insert(
            ['title' => 'IPhone 15 ProMax', 'name' => 'Titan', 'price' => 3.14, 'user_id' => 1]
        );
    }

    function update($id) {
        DB::table('products')
        ->where('id', $id)
        ->update(
            ['title' => 'Danh muc Iphone Tian', 'name' => 'Titan xanh duong']
        );
    }

    function getList(){
         $products = DB::table('products')->get();

        return $products;
    }

    function delete($id){
        DB::table('products')
        ->where('id', $id)
        ->delete();
    }

}
