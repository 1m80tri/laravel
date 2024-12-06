<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $posts = 'posts';

    // protected $fillable = ['title, description', 'user_id'];

    function featuredImages(){
        return $this->hasOne(FeaturedImages::class);
    }  
    
    function user(){
        return $this->belongsTo(User::class);
    }
}
                  