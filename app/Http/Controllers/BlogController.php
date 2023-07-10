<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogPost(){
        return view('backend.pages.blog.blog');
    }

    public function blogStore(Request $request){
        $imageName = null;
        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = date('Ymdi').'.'.$file->extension();
        $file->storeAs('uploads', $imageName, 'public');
        }
        //dd($imageName);

        //dd($request->all());

      Blog::create([

        "tittle"=>$request->tittle,
        "description"=>$request->description,
        "image"=>$imageName,

      ]);
      return back()->with('success','Blog Uploaded Successfully!');

    }
}
