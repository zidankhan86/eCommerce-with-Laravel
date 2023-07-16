<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

          $categories = Category::all();
          $latestCategories = Category::latest()->limit(5)->get();
          $products = Product::simplePaginate(12);
          $latestProducts = Product::where('status',1)->latest()->limit(12)->get();

          $categoryWiseProducts = Product::where('status',1)->latest()->limit(12)->get();

        return view('frontend.pages.home',compact('categories','products','latestProducts','categoryWiseProducts','latestCategories'));
    }
}
