<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    function income_list(){
        $user = auth()->user();
        $data['results'] = $user->incomes;
        return view('income_list', $data);
    }

    function income_add(){
        return view('income_add');
    }

    function income_add_store(Request $request){
        $user = auth()->user();
        try {
            Income::create([
                'amount' => $request->input('amount'),
                'income_date' => $request->input('income_date'),
                'description' => $request->input('description'),
                'user_id' => $user->id,
            ]);
            return redirect()->route('income')->with('status', 'Income Successfully Added!');
        } catch (\Throwable $th) {
            return back()->with('status', 'Something is wrong! '.$th->getMessage());
        }
    }

    function income_del(Request $request){
        $userID = auth()->user()->id;
        try {
            
            Income::where('id', $request->id)->where('user_id', $userID)->delete();
            return redirect()->route('income')->with('status', 'Income Successfully Deleted!');
        } catch (\Throwable $th) {
            return back()->with('status', 'Something is wrong! '.$th->getMessage());
        }

    }
}
