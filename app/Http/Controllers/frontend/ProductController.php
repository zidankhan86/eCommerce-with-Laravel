<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){

        $products = Product::all();
        return view('frontend.pages.product.product',compact('products'));
    }

    public function productDetails($id){

        $details = Product::find($id);
        return view('frontend.pages.product.details',compact('details'));
    }
}
