<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
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
            return response()->json(['Error' => 'Something is wrong. '.$th->getMessage()], '500' );
        }
    }


    function user_login(Request $request){
        $count = User::where('email', $request->input('email'))
                        ->where('password', $request->input('password'))->count();
            if($count==1){
                $token = JWTToken::create_token($request->input('email'));
                return response()->json([
                    'status' => 'success',
                    'message' => 'User login successful.',
                    'token' => $token,
                ]);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'User Password Wrong!',
                ], 400);
            }
    }
}
