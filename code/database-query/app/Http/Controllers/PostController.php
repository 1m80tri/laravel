<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function add(){
        DB::table('post') -> insert(
            ['title' => 'Post 1', 'description' => 'Wind Progaming', 'user_id' => 1]
        );
    }

    function show(){
        // $post = DB::table('post') -> get();
        // return $post;

        //join lấy dữ liệu qua nhiều bảng
        $post = DB::table('post')
        ->join('users', 'users.id', '=', 'post.user_id')
        ->select('users.name', 'post.*')
        ->get();

        print_r($post);
        return $post;
    }

    function update($id){
        DB::table('post')
        ->where('id',$id)
        ->update([
            'title' => 'Macbook 2024'
        ]);
    }

    function delete($id){
        DB::table('post')
        ->where('id', $id)
        ->delete();
    }
}
