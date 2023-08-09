<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    function income_list(){
        $user = auth()->user();
        $data['results'] = $user->incomes;
        return view('income_list', $data);
    }
}
