<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function showSignupForm(){
        return view('signup');
    }


    public function signup(Request $request){

        // validation
        $request -> validate([
            'fullname' => 'required|string',
            'email' => 'required|email|unique:users',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //create user
        User::create([
            'fullname' => $request -> fullname,
            'email' => $request -> email,
            'username' => $request -> username,
            //'password' => $Hash::make($request->password),
            'password_hash' => $request -> password,
        ]);

        //Redirect to login page
        return redirect('/login')->with('Success','Account created successfully. Please Login.');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request){
        //login to be added here.
    }
}
