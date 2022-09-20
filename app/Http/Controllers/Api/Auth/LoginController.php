<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'password' => ['required'],
            'email' => ['required']
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
/*             Session::regenerate();
            return redirect()->route('web.tasks.index'); */

            return response()->json([
                'url' => route('web.tasks.index')
            ]);
        }

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
        
        return redirect('web.login');
    }
}
