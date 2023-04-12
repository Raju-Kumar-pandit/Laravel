<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $request){
        $email=$request->email;
        $pass = $request->password;
        $user = User::where('email', $email)->get();
        return view('resume',['user' => $user]);
    }
}
