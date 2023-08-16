<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    function dashboard(){
        $data['event_count'] = Event::where('user_id', auth()->user()->id)->count();
        return view('dashboard', $data);
    }
    function event_list(){
        $data['results'] = Event::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->paginate('10');
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
    

    function event_update(Request $request){
        try {
            Event::where('id', $request->input('id'))->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'date' => $request->input('date'),
                'time' => $request->input('time'),
                'location' => $request->input('location'),
            ]);

            return redirect()->route('event_list')->with('msg', 'Event Successfully Updated!');
        } catch (\Throwable $th) {
            return back()->with('msg', 'Something is wrong! '.$th->getMessage());
        }
    }

    function event_delete(Request $request){
        try {
            Event::where('id', $request->id)->delete();

            return redirect()->route('event_list')->with('msg', 'Event Successfully Deleted!');
        } catch (\Throwable $th) {
            return back()->with('msg', 'Something is wrong!');
        }
    }

    function event_details(Request $request){
        $data['result'] = Event::where('id', $request->id)->first();
        return view('event_details', $data);
    }
    function event_edit(Request $request){
        $data['result'] = Event::where('id', $request->id)->first();
        return view('event_edit', $data);
    }

    
}
