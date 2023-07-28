<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Rules\MaxDataLimit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function blogPost(){
        return view('backend.pages.blog.blog');
    }

    public function blogStore(Request $request){

        $validator = Validator::make($request->all(), [
            'tittle' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'max:150'],
        ]);

        $validator->after(function ($validator) {
            $existingCount = Blog::count();
            $maxLimit = 3;

            if ($existingCount >= $maxLimit) {
                $validator->errors()->add('max_limit', 'The maximum data limit has been reached.');
            }
        });

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


    public function bloglist(){

        $blogs = Blog::all();
        return view('frontend.pages.blog.blogList',compact('blogs'));
    }


    public function blogdelete($id){
        $delete = Blog::find($id);
        $delete->delete();
        Alert::toast()->success('Deleted! Product Deleted');
        return redirect()->back();
    }
}
