<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
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

    public function productCheckout($id){

        $products = Product::find($id);
        return view('frontend.pages.product.checkout',compact('products'));
    }


    public function order(Request $request){



       //dd($request->all());

        Order::create([
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "address"=>$request->address,
            "optional_address"=>$request->optional_address,
            "city"=>$request->city,
            "postcode"=>$request->postcode,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "note"=>$request->note,
        ]);
        return back()->with('success','Order Confirmed');
    }
}
