<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.pages.contactus.contactus');
    }
    public function contactForm(Request $request){

       // dd($request->all());

        Contact::create([

            "name"=>$request->name,
            "email"=>$request->email,
            "message"=>$request->message,

        ]);
        return back();

    }
}
