<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryForm(){
        return view('backend.pages.category.categoryForm');
    }

    public function categoryStore(Request $request){

        //dd($request->all());

        Category::create([

            "name"=>$request->name,
            "type"=>$request->type

        ]);

        return back()->with('success', 'Category Added Successfully');

    }
}
