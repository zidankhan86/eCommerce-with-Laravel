<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'image' => 'required|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $existingBannersCount = Banner::count();
    if ($existingBannersCount >= 2) {
        return back()->with('error', 'Maximum number of banners reached');
    }

    $imageName = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = date('Ymdi').'.'.$file->extension();
        $file->storeAs('uploads', $imageName, 'public');
    }

       // dd($imageName);
        //dd($request->all());

        Banner::create([

        "tittle"=>$request->tittle,
        "description"=>$request->description,
        "image"=>$imageName

        ]);

        return back()->with('success','Banner Uploaded Succesfully!');

    }

    public function bannerdelete($id){
        $banner = Banner::find($id);

    if ($banner) {
        $banner->delete();
        return redirect()->back()->with('success', 'Banner deleted successfully!');
    }

    return redirect()->back()->with('error', 'Banner not found.');

    }


public function bannerlist(){
    $banners = Banner::all();
    return view('backend.pages.banner.bannerList',compact('banners'));
}

public function banneredit($id){

    $edit = Product::find($id);
    return view('backend.pages.banner.edit',compact('edit'));
}


public function bannerupdate(Request $request,$id){
    $validator = Validator::make($request->all(), [
        'tittle' => 'required',
        'description' => 'required',
        'image' => 'required|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $existingBannersCount = Banner::count();
if ($existingBannersCount >= 2) {
    return back()->with('error', 'Maximum number of banners reached');
}

$imageName = null;
if ($request->hasFile('image')) {
    $file = $request->file('image');
    $imageName = date('Ymdi').'.'.$file->extension();
    $file->storeAs('uploads', $imageName, 'public');
}

   // dd($imageName);
    //dd($request->all());



    $update = Banner::find($id);
    $update->update([

        "tittle"=>$request->tittle,
        "description"=>$request->description,
        "image"=>$imageName
    ]);


    return redirect()->route('banner.list');

}

}
