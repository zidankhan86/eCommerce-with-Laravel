<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function categoryForm(){
        return view('backend.pages.category.categoryForm');
    }

    public function categoryStore(Request $request){

        $validate = Validator::make($request->all(),[
            'name'=>'required|unique',
        ]);

        if($validate->fails()){
            return back();
        }

        //dd($request->all());

        Category::create([

            "name"=>$request->name,
            "type"=>$request->type

        ]);

        return back()->with('success', 'Category Added Successfully');

    }
    public function categoryList(){
        $category = Category::all();
        return view('backend.pages.category.categoryList',compact('category'));
    }



}
