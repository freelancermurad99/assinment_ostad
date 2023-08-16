<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    function dashboard(){
        
        return view('dashboard');
    }
    function event_list(){
        $data['results'] = Event::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
        return view('event_list', $data);
    }

    function event_add(){
        return view('event_add');
    }

    function event_add_store(Request $request){
        try {
            Event::create($request->input());

            return redirect()->route('event_list')->with('msg', 'Event Successfully Added!');
        } catch (\Throwable $th) {
            return back()->with('msg', 'Something is wrong!');
        }
    }
}
