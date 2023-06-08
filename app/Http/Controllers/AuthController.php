<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function registerIndex()
    {
        return view('auth.register');
    }

    public function login()
    {
        return redirect()->back();
    }
    
    public function register()
    {
        return redirect()->back();
    }
}
