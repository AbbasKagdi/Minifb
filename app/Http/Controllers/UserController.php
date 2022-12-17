<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show user register form
    public function create(){
        return view('users.register');
    }

    // save a newly registered user
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>['required', 'min:3'],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required', 'confirmed', 'min:6']
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user using model
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        // redirect
        return redirect('/')->with('message', 'Your account is created and logged in successfully.');
    }
    
    // logout the user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Logged out successfully.');
    }

    // show user login form
    public function login(){
        return view('users.login');
    }

    // authenticate user
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        // create user session id
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Logged in successfully.');
        }

        // invalid login by user
        // email stays in field
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}
