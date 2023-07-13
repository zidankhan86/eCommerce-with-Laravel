<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function categoryForm(){

        $products = Product::all();
        return view('backend.pages.category.categoryForm',compact('products'));
    }

    public function categoryStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'type' => 'required|string|unique:categories',
        ]);

    if ($validator->fails()) {

        return redirect()->back()->withErrors($validator)->withInput();
    }

       // dd($request->all());

        Category::create([


            "name"=>$request->name,
            "type"=>$request->type

        ]);

        return back()->with('success', 'Category Added Successfully');

    }
    public function categoryList(){
        $category = Category::latest()->get();
        return view('backend.pages.category.categoryList',compact('category'));
    }



}
