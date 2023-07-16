<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){

          $categories = Category::all();
          $latestCategories = Category::latest()->limit(5)->get();
          $products = Product::simplePaginate(20);
          $latestProducts = Product::where('status',1)->latest()->limit(12)->get();



          $blogs = Blog::all();



        return view('frontend.pages.home',compact('categories','products','latestProducts','latestCategories','blogs'));
    }

    public function categoryWiseProduct($id){

        $category = Category::findOrFail($id);

        $products = Product::where('category_id', $id)
        ->where('status', 1)->limit(20)
        ->get();



        return view('frontend.pages.catWizeProduct.categoryWizeProduct',compact('products','category'));
    }
}
