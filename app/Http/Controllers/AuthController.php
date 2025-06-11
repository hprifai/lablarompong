<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginForm (){
        return view('auth/login');
    }

    function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password'=> ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('posts');
        }
        return back()->withErrors([
            'email' => 'Email Or Password Invalid',
        ]);
    }
    function logout (Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
