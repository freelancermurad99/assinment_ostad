<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class get_posts extends Controller
{
    function get_posts(){
        $posts = Post::with('category')->get();

        foreach ($posts as $post) {
            $category = $post->category;
            // Access the category properties or perform any other operations
        }

    }
}
