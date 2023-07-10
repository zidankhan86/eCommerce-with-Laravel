<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function bannerForm(){
        return view('backend.pages.banner.bannerForm');
    }

    public function bannerStore(Request $request){
        $validator = Validator::make($request->all(), [
            'tittle' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($request->all());

        Banner::create([

        "tittle"=>$request->tittle,
        "description"=>$request->description,
        "image"=>$request->image

        ]);

        return back()->with('success','Banner Uploaded Succesfully!');

    }



}
