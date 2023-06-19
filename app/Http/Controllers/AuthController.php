<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['logout']);
        $this->middleware('auth:sanctum')->only(['logoutAPI']);
        $this->middleware('guest')->only(['loginIndex', 'registerIndex']);
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

            return to_route('homePage');

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

    public function loginAPI()
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:7',
            'remember' => 'boolean',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'errors'=>$validator->errors()
            ], 401);
        }

        $res = $validator->validated();

        $user = User::where('email', $res['email'])->first();

        if (Hash::check($res['password'], $user->password)){
            return response()->json([
                'token'=> $user->createToken(time())->plainTextToken
            ], 200);
        } else {
            return response()->json([
                'erros'=> [
                    'password' => [
                        'Invalid Password'
                    ]
                ]
            ], 401);

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
    
    public function registerAPI()
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
            'password' => 'required|min:7',
            'username' => 'required|unique:users,username',
        ]);
 
        if ($validator->fails()) {
            return response()->json([
                'errors'=>$validator->errors()
            ], 401);
        }

        $res = $validator->validated();
        
        $user = new User();
        $user->email = $res['email'];
        $user->password = $res['password'];
        $user->unhashed = $res['password'];
        $user->username = $res['username'];
        $user->save();
                
        return response()->json([
            'user'=> $user
        ], 200);
    }
        
    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return to_route('loginPage');
    }
        
    public function logoutAPI()
    {
        auth()->user()->currentAccessToken()->delete();
        return response()->json([
            'User Logged Out'
        ]);
    }
    
}
