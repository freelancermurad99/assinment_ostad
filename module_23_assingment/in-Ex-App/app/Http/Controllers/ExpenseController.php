<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    function expense_list(){
        $user = auth()->user();
        $data['results'] = $user->expenses;
        return view('expense_list', $data);
    }

    function expense_add(){
        return view('expense_add');
    }

    function expense_add_store(Request $request){
        $user = auth()->user();
        try {
            Expense::create([
                'amount' => $request->input('amount'),
                'expense_date' => $request->input('expense_date'),
                'description' => $request->input('description'),
                'user_id' => $user->id,
            ]);
            return redirect()->route('expense')->with('status', 'Expense Successfully Added!');
        } catch (\Throwable $th) {
            return back()->with('status', 'Something is wrong! '.$th->getMessage());
        }
    }

    function expense_del(Request $request){
        $userID = auth()->user()->id;
        try {
            
            Expense::where('id', $request->id)->where('user_id', $userID)->delete();
            return redirect()->route('expense')->with('status', 'Expense Successfully Deleted!');
        } catch (\Throwable $th) {
            return back()->with('status', 'Something is wrong! '.$th->getMessage());
        }

    }
}
