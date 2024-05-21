<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){

        $order = Order::with('user','product')->where('user_id',auth()->user()->id)->get();

        return view('frontend.pages.profile',compact('order'));
    }

    public function adminProfile(){
        
        return view('backend.pages.profile.profile');
    }
}
