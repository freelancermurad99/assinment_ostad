<?php
namespace App\Helper;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken{
    public static function create_token($userEmail){
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'todo_app',
            'iat' => time(),
            'exp' => time()+60*60,
            'email' => $userEmail,
        ];
        return JWT::encode($payload, $key, 'HS256');
    }

    public static function verify_token($token){
        try {
            $key = env("JWT_KEY");
            $decode = JWT::decode($token, new Key($key, 'HS256'));
            return $decode->email;      
        } catch (\Throwable $th) {
            return "Unauthorized";
        }
    }
}