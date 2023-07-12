<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
        $data['comments'] = Comment::where('post_id',$request->id)->get();
        return view('post_details', $data);
    }
}
