<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function show(){
        return view('welcome');
     }
   
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the intended location
            return redirect()->intended('dashboard');
        }

        // Authentication failed, redirect back with an error
        return redirect()->back()->withErrors([
            'message' => 'Invalid login credentials.',
        ]);
    }
}
