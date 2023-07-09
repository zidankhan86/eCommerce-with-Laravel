<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productForm(){

        $categories = Category::all();
        return view('backend.pages.product.productForm',compact('categories'));
    }

    public function productStore(Request $request){

       // dd($request->all());

          Product::create([

            "name"=>$request->name,
            "category_id"=>$request->category_id,
            "image"=>$request->image,
            "weight"=>$request->weight,
             "stock"=>$request->stock,
             "price"=>$request->price,
             "discount"=>$request->discount,
             "time"=>$request->time,
             "description"=>$request->description,

          ]);

          return back()->with('success', 'Product Added Successfully');
    }
}
