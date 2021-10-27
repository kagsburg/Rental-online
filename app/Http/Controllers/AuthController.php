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
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
        $user =User::where('email',$fields['email'])->first();

        if(!$user ||!Hash::check($fields['password'],$user->password)){
            return response([
                'message'=>'Bad cred'
            ],401);
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response=[
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);
    }
    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return [
            'message'=>'Logged out'
        ];}
}