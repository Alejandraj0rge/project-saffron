<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view('authentication.login', /* compact('tasks') */);
    }
}