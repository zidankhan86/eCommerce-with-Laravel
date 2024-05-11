<?php

namespace App\Http\Controllers;

use App\Models\CompanyLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyLogoController extends Controller
{
   public function LogoForm()
   {
    return view('backend.pages.companyLogo.logoForm');
   }
   public function LogoStore(Request $request)
   {
    $validator = Validator::make($request->all(), [
        'tittle' => 'nullable',
        'image' => 'required|max:200',
    ]);

if ($validator->fails()) {
    return redirect()->back()->withErrors($validator)->withInput();
}

$existingBannersCount = CompanyLogo::count();
if ($existingBannersCount >= 2) {
    return back()->with('error', 'Maximum number of banners reached');
}

$imageName = null;
if ($request->hasFile('image')) {
    $file = $request->file('image');
    $imageName = date('YmdiY').'.'.$file->extension();
    $file->storeAs('uploads', $imageName, 'public');
}

// dd($imageName);
//dd($request->all());

    CompanyLogo::create([

    "tittle"=>$request->tittle,
    "image"=>$imageName

    ]);

    return back()->with('success','Logo Uploaded Successfully!');

   }

   public function LogoDelete($id)
   {

    $delete = CompanyLogo::find($id);

    $delete->delete();

    return back()->with('success','logo deleted!!');

   }
   public function LogoList()
   {
    $logo = CompanyLogo::all();
    return view('backend.pages.companyLogo.logoList',compact('logo'));
   }

   public function Logo_edit($id){

    $logo = CompanyLogo::find($id);

    return view('backend.pages.companyLogo.edit',compact('logo'));
   }

   public function logo_update(Request $request,$id){
    $validator = Validator::make($request->all(), [
        'tittle' => 'nullable',
        'image' => 'required|max:200',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $imageName=null;
    if ($request->hasFile('image')) {
        $imageName=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('uploads', $imageName, 'public');
    }
    $update = CompanyLogo::find($id);
    $update->update([

        "tittle"=>$request->tittle,
        "image"=>$imageName
    ]);

    return redirect()->back()->with('success','Logo Updated');

    }
    }
