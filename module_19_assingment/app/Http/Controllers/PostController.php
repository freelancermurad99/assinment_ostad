<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function get_posts(){
        $data['all_posts'] = Post::get();
        return view('blog', $data);
    }

    function posts(Request $request){
        $data['posts'] = Post::where('id',$request->id)->get();
        return view('post_details', $data);
    }
}
