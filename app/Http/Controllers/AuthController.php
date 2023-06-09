<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['logout']);
        // $this->middleware('subscribed')->except('store');
    }
    
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
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:7',
            'remember' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $res = $validator->validated();

        $authData = $validator->safe()->only(['email', 'password']);

        if(auth()->attempt($authData, $res['remember'])) {

            session()->regenerate();

            return to_route('productPage');

        } else {
            return redirect()
            ->back()
            ->withErrors([
                'password' => [
                    'Password is incorrect.'
                ]
            ])
            ->withInput();
        }
    }
    
    public function register()
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
            'password' => 'required|min:7',
            'username' => 'required|unique:users,username',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $res = $validator->validated();
        
        $user = new User();
        $user->email = $res['email'];
        $user->password = $res['password'];
        $user->unhashed = $res['password'];
        $user->username = $res['username'];
        $user->save();
                
        return to_route('loginPage');
    }
        
    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return to_route('loginPage');
    }
    
}
