<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerTwo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function bannerForm(){
        return view('backend.pages.banner.bannerForm');
    }

    public function bannerStore(Request $request){
        $validator = Validator::make($request->all(), [
            'tittle' => 'required',
            'description' => 'required',
            'image' => 'required|max:200',
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

    $edit = Banner::find($id);
    return view('backend.pages.banner.edit',compact('edit'));
}


public function bannerupdate(Request $request,$id){
    $validator = Validator::make($request->all(), [
        'tittle' => 'required',
        'description' => 'required',
        'image' => 'required|max:200',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
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

Alert::toast()->success('Banner Updated');
    return redirect()->route('banner.list');

}

public function bannerFormTwo(){
    return view('backend.pages.banner.bannarForm2');
}

public function bannerListTwo(){
    $banners = BannerTwo::all();
    return view('backend.pages.banner.bannerlist2',compact('banners'));
}

public function bannerStoreTwo(Request $request){

    $validator = Validator::make($request->all(), [
        'tittle' => 'required',
        'description' => 'required',
        'image' => 'required|max:400',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $existingBannersCount = BannerTwo::count();
if ($existingBannersCount >= 2) {
    return back()->with('error', 'Maximum number of banners reached');
}

$imageName = null;
if ($request->hasFile('image')) {
    $file = $request->file('image');
    $imageName = date('Ymdii').'.'.$file->extension();
    $file->storeAs('uploads', $imageName, 'public');
}

   // dd($imageName);
    //dd($request->all());

    BannerTwo::create([

    "tittle"=>$request->tittle,
    "description"=>$request->description,
    "image"=>$imageName

    ]);

    return back()->with('success','Banner Uploaded Successfully!');

}
public function bannerTwoDelete($id){

    $banner = BannerTwo::find($id);

    if ($banner) {
        $banner->delete();
        return redirect()->back()->with('success', 'Banner deleted successfully!');
    }

    return redirect()->back()->with('error', 'Banner not found.');

}

}
