<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    function user_reg(Request $request){
        try {
            User::create([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'password' => $request->password,
                'otp' => $request->otp,
            ]);

            return response()->json(['success' => 'Registration Successful'], '200' );
            
        } catch (\Throwable $th) {
            return response()->json(['Error' => 'Something is wrong'.$th], '500' );
        }
    }
}
