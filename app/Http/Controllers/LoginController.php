<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::user())
        {
            return response()->redirectTo('/admin');
        }
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->all();
        unset($credentials['_token']);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return response()->redirectTo('/admin');
        }
        return response()->redirectTo('/login')->withErrors([
            'email' => 'Неправильный Email или пароль',
        ])->onlyInput('email');
    }
}
