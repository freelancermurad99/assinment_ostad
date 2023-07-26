<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $user = Auth::user();

        $todos = Todo::where('user_id', $user->id)->get();

        return response()->json([
            'status' => 'success',
            'todos' => $todos,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $todo = Todo::create([
            'user_id' => $user->id, 
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Todo created successfully',
            'todo' => $todo,
        ]);
    }

    public function show($id)
    {
        
        $user = Auth::user();

        
        $todo = Todo::where('user_id', $user->id)->find($id);

        if (!$todo) {
            return response()->json([
                'status' => 'error',
                'message' => 'Todo not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'todo' => $todo,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        
        $user = Auth::user();

        
        $todo = Todo::where('user_id', $user->id)->find($id);

        if (!$todo) {
            return response()->json([
                'status' => 'error',
                'message' => 'Todo not found',
            ], 404);
        }

        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Todo updated successfully',
            'todo' => $todo,
        ]);
    }

    public function destroy($id)
    {
        
        $user = Auth::user();

        
        $todo = Todo::where('user_id', $user->id)->find($id);

        if (!$todo) {
            return response()->json([
                'status' => 'error',
                'message' => 'Todo not found',
            ], 404);
        }

        $todo->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Todo deleted successfully',
            'todo' => $todo,
        ]);
    }
}
