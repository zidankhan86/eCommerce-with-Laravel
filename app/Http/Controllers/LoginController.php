<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('backend.pages.auth.loginForm');
    }



    public function loginProcess(Request $request)
{
    //dd($request->all());

  // Validate the input fields
  $validator = Validator::make($request->all(), [
    'email' => 'required|email',
    'password' => 'required',
]);

if ($validator->fails()) {
    return redirect()->back()->withErrors($validator)->withInput();
}

$credentials = $request->only(['email', 'password']);
$remember = $request->has('remember'); // Check if the "Remember Me" checkbox is checked

if (Auth::attempt($credentials, $remember)) {
    $user = Auth::user();

    if ($user->role == 'admin') {
        return redirect()->route('dashboard');
    } elseif ($user->role == 'customer') {
        return redirect()->route('home');
    }
}

// Authentication failed
return redirect()->back()->withInput()->withErrors(['login' => 'Invalid credentials']);

}

public function logout(){

    Auth::logout();
    return redirect()->route('home');

}


public function registration(){
    return view('backend.pages.auth.registration');
}

}
