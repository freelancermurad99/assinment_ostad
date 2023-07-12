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

            return back()->with('message', 'Comment Added');
        } catch (\Throwable $th) {
            return back()->with('message', 'Something is wrong');
        }
    }
}
