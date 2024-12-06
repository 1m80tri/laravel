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
    $posts = Post::simplePaginate(1);

    return view("post.index", compact('posts'));
   }
   function add(){
    return view("tiny");
   }
}
