<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginView()
    {
        
        return view('pages.login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json(['success'=> true]);
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function cadastroAction(Request $request)
    {
        $usuario = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'name' => ['required'],
            'password' => ['required']
        ]);
        
        dd($usuario);
    }
}
