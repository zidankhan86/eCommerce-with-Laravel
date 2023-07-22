<?php

namespace App\Http\Controllers\frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function product(){

        $products = Product::all();
        $latestCategories = Category::latest()->limit(5)->get();
        return view('frontend.pages.product.product',compact('products','latestCategories'));
    }

    public function productDetails($id){

        $details = Product::find($id);
        return view('frontend.pages.product.details',compact('details'));
    }

    public function productCheckout($id){
        $products = Product::find($id);

        $cartItems = session()->get('cart', []);
        $subtotal = 0;

        if ($cartItems !== null) {
            foreach ($cartItems as $item) {
                $subtotal += $item['subtotal'];
            }
        }

        return view('frontend.pages.product.checkout', compact('products', 'cartItems', 'subtotal'));

    }


    public function order(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'optional_address' => 'nullable|string',
            'city' => 'required|string',
            'postcode' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'note' => 'nullable|string',
            'total_price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }



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
            "total_price" => $request->total_price,
        ]);
        session()->forget('cart');

        Alert::toast()->success('Success, Order Confirmed!');

        return redirect()->route('home');

    }


    public function singleProductCheckout($id){


        $product = Product::findOrFail($id);
        return view('frontend.pages.product.checkoutSigleProduct',compact('product'));
    }
}
