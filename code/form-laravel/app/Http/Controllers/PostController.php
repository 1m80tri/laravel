<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
   function get(){
    $post = Post::find(2);

    $img = $post->featuredImages;

    // Return the model as JSON
    return response()->json($img);
   }

   function getUser(){
     $user = Post::find(2)
     ->user;

    return response()->json($user);
   }
   
   function getPost(){
        $posts = User::find(1)
        ->posts;
        return response()->json($posts);
   }
}
