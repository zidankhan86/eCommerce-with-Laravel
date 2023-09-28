<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
   public function shopForm(){
    return view('backend.pages.shop.shopForm');
   }

   public function shopStore(Request $request){
    $validator = Validator::make($request->all(), [
        'shop_name' => 'required|string',
        'owner_name' => 'required',
        'image' => 'nullable|max:200',
        'shop_area' => 'required',
        'license' => 'required|numeric',
        'email' => 'required',
        'phone' => 'required',
        'about' => 'nullable',
        'status'=> 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }


    $images = null;
    if ($request->hasFile('image')) {
    $file = $request->file('image');
    $images = date('Ymdi').'.'.$file->extension();
    $file->storeAs('uploads', $images, 'public');
    }
    //dd($imageName);
    // dd($request->all());


      Shop::create([

        "shop_name"=>$request->shop_name,
        "owner_name"=>$request->owner_name,
        "image"=>$images,
        "shop_area"=>$request->shop_area,
         "license"=>$request->license,
         "email"=>$request->email,
         "phone"=>$request->phone,
         "about"=>$request->about,
         'status' =>$request->status,

      ]);


      return back()->with('success', 'Shop Added Successfully!');


   }
}
