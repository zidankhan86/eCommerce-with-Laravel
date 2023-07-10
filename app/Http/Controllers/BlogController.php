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

        //dd($request->all());

      Blog::create([

        "tittle"=>$request->tittle,
        "description"=>$request->description,
        "image"=>$request->image,

      ]);
      return back()->with('success','Blog Uploaded Successfully!');

    }
}
