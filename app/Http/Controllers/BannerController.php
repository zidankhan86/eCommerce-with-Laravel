<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerForm(){
        return view('backend.pages.banner.bannerForm');
    }

    public function bannerStore(Request $request){

        //dd($request->all());

        Banner::create([

        "tittle"=>$request->tittle,
        "description"=>$request->description,
        "image"=>$request->image

        ]);

        return back()->with('success','Banner Uploaded Succesfully!');

    }



}
