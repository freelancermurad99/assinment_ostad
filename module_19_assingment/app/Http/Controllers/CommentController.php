<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function add_comment(Request $request){
        try {
            Comment::create([
                'post_id' => $request->post_id,
                'name' => $request->name,
                'comments' => $request->comment
            ]);

            return back()->with('message');
        } catch (\Throwable $th) {
            
        }
    }
}
