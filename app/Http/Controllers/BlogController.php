<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function blogPost(){
        return view('backend.pages.blog.blog');
    }

    public function blogStore(Request $request){

        $validator = Validator::make($request->all(), [
            'tittle' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable',
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
        //dd($imageName);

       // dd($request->all());

      Blog::create([
        "comment_id"=>$request->comment_id,
        "tittle"=>$request->tittle,
        "description"=>$request->description,
        "image"=>$imageName,

      ]);
      return back()->with('success','Blog Uploaded Successfully!');

    }
    public function blog(){


        $blogs = Blog::all();
        $comment = Comment::all();
        // $blogs = Blog::withCount('comments')->get();

        return view('frontend.pages.blog.blog',compact('blogs','comment'));
    }
}
