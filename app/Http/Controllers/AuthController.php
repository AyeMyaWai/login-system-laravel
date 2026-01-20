<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function login(Request $request)
    {
         if (Auth::check()) {
            return redirect('/dashboard');
        }
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => '無効な資格情報です。',
        ]);
    }

    public function logout(Request $request){

        Auth::logout(); 
        $request->session()->invalidate();   
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
