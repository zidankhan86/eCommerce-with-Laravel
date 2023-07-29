<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{



    public function showResetForm(Request $request, $token = null)
    {
        return view('frontend.pages.resetPassword.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    protected function resetPassword($user, $password)
    {
        $user->password = bcrypt($password);
        $user->save();
    }

    // Get the broker to be used during password reset.
    public function broker()
    {
        return Password::broker();
    }
}
