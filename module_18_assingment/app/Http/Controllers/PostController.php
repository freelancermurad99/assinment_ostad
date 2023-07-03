<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();

        return view('posts', compact('posts'));
    }

    public function latest_posts()
    {
        $categories = Category::with('latestPost')->get();

        return view('latest_posts', compact('categories'));
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Optionally, you can redirect or return a response
        // after the post is deleted.
    }
}
