<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerOne;
use App\Models\BannerTwo;
use App\Models\HeroBanner;

class HomeController extends Controller
{
    public function home(){


          //Blog
          $blogs = Blog::all();

          //Banner
          $banners = Banner::all();
          $bannersOne = BannerOne   ::all();
          $bannersTwo = BannerTwo::all();

          //Category
          $categories = Category::all();

          //Products
          $products = Product::simplePaginate(20);

          //Hero Banner
          $heroBanners = HeroBanner::all();

          //Latest Category
          $latestCategories = Category::latest()->limit(5)->get();

          //Latest Products
          $latestProducts = Product::where('status',1)->latest()->limit(6)->get();


         return view('frontend.pages.home',
         compact('categories','products','latestProducts',
        'latestCategories','blogs','banners','heroBanners','bannersTwo','bannersOne'));
    }

       public function categoryWiseProduct($id){

        $category = Category::findOrFail($id);

        //Feature Products
        $products = Product::where('category_id', $id)
        ->where('status', 1)->limit(20)
        ->get();



        return view('frontend.pages.catWizeProduct.categoryWizeProduct',compact('products','category'));
    }
}
