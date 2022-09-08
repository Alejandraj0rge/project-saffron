<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'password' => ['required'],
            'email' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/tasks');
        }
        dd('no, didnt log on');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'password' => ['required'],
            'email' => ['required'],
            'name' => ['required']
        ]);

        $credentials['password'] = Hash::make($credentials['password']);    
        User::create($credentials);
        
        return redirect('login');
    }
}
