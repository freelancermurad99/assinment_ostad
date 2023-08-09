<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    function expense_list(){
        $user = auth()->user();
        $data['results'] = $user->expenses;
        return view('expense_list', $data);
    }

    function expense_add(){
        
    }

    function expense_add_store(){

    }
}
