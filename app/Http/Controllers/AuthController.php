<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $fields = $request->validate([
            'Email'=>'required|string',
            'password'=>'required|string'
        ]);
        $user =User::where('email',$fields['email'])->first();

        if(!$user ||!Hash::check($fields['password'],$user->password)){
            $response=[
                'statusCode'=>401,
                'message'=>'Invalid Password or Email',
                
            ];
            return response($response);
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response=[
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);
    }
    public function logout(Request $request){
        if ($request->user()) { 
            $request->user()->tokens()->delete();
        }
    
        // auth('sanctum')->user()->tokens()->delete();
        return response( [
            'message'=>'User Logged out'
        ],200);
    }
    public function validateApiToken(Request $request){
        return response(['message'=>'User Logged in'],200);
    }
}
