<?php

namespace App\Http\Controllers;

use App\Models\User;
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
   // dd($request->all());

  // Validate the input fields
  $validator = Validator::make($request->all(), [
    'email' => 'required|email',
    'password' => 'required',
]);

if ($validator->fails()) {
    notify()->error('error','Invalid credentials');
    return redirect()->back();
}

$credentials = $request->only(['email', 'password']);
$remember = $request->has('remember'); // Check if the "Remember Me" checkbox is checked

if (Auth::attempt($credentials, $remember)) {
    $user = Auth::user();

    if ($user->role == 'admin') {
        return redirect()->route('dashboard');
    } elseif ($user->role == 'customer') {
        notify()->success('Login successful!.');
        return redirect()->route('home');
    }
}
notify()->error('error','Invalid credentials');
// Authentication failed
return redirect()->back();

}

public function logout(){

    Auth::logout();
    return redirect()->route('home');

}


public function registration(){
    return view('backend.pages.auth.registration');
}

public function registrationStore(Request $request){

    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:users',
        'phone' => [
            'required',
            'regex:/^(?:\+?88|0088)?01[13-9]\d{8}$/'
        ],
        'address' => 'required',
        'name' => 'required',
        'password' => 'required|min:5',
    ], [
        'phone.regex' => 'The phone number should be a valid number.'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
   // dd($request->all());

    User::create([

        "email"=>$request->email,

        "phone"=>$request->phone,

        "address"=>$request->address,

        "name"=>$request->name,


        "password"=>bcrypt($request->password),

        "role"=>'customer',

    ]);
    notify()->success('Registration successful!.');
    return redirect('/login-frontend')->withSuccess('Registration Success');

}

public function showLoginFormFrontend(){
    return view('backend.pages.auth.loginFrontend');
}

}
