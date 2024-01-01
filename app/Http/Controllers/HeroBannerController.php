<?php

namespace App\Http\Controllers;

use App\Models\HeroBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeroBannerController extends Controller
{
    public function heroPost(){
        return view('backend.pages.heroBanner.heroBannerForm');
    }

    public function herostore(Request $request){

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'tittle'        => 'required',
            'description'   => 'required',
            'image'         => 'required|max:250',
            'small_tittle'  => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $existingBannersCount = HeroBanner::count();
    if ($existingBannersCount >= 1) {
        return back()->with('error', 'Maximum number of banners reached');
    }

    $imageName=null;
        if ($request->hasFile('image')) {
            $imageName=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }

       // dd($imageName);
        //dd($request->all());

        HeroBanner::create([

        "tittle"        =>$request->tittle,
        "small_tittle"  =>$request->small_tittle,
        "description"   =>$request->description,
        "image"         =>$imageName

        ]);

        return back()->with('success','Banner Uploaded Successfully!');
    }

    public function herolist(){

        $banners = HeroBanner::all();
        return view('backend.pages.heroBanner.heroList',compact('banners'));
    }

    public function herodelete($id){
        $delete = HeroBanner::find($id);
        $delete->delete();

        return redirect()->back();
    }


    public function hero(){
        return view('frontend.pages.hero');
    }
}
