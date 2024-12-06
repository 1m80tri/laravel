<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function getList(){
        $posts = Post::all();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        return $posts;
    }

    //method save anf update
    function update($id){
        $post = Post::where('id',$id);
        $post->update(
            [
                'title' => 'Thanh Phong',
            ]
        );
    }

    function add(){
        Post::created([
            'title' => 'iPhone',
            'description' => "iPhone 15 Pro Max",
            'user_id' => 1
        ]);
    }

    // function delete(){
    //     $post = Post::find();
    //     $post-> delete();
    // }
    //delete according to the
    function delete($id){
        $post = Post::where('user_id',1)->delete();

        return $post;
    }

    function restore($id){
      Post::onlyTrashed()
      ->where('id', $id)
      ->restore();
    }

    //permanent delete
    function permanentDelete($id){
        Post::onlyTrashed()
        ->where('id', $id)
        ->forceDelete();
    }
}
