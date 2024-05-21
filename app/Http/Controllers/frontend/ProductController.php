<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderReceivedNotification;

class ProductController extends Controller
{
    public function product(){

        $products = Product::simplePaginate(12);
        $latestCategories = Category::latest()->limit(5)->get();
        //Latest Products
        $latestProducts = Product::where('status',1)->latest()->limit(7)->get();
        $total_products = Product::count();
        $products_has_discount = Product::whereNotNull('discount')->latest()->limit(4)->get();
        return view('frontend.pages.product.shop',compact('products','latestCategories','latestProducts','total_products','products_has_discount'));
    }

    public function productDetails($id){
        $routeName = 'details';
        $url = route($routeName, ['id' => $id]);
        $shareComponent = \Share::page(
            $url,
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        $details = Product::find($id);
        return view('frontend.pages.product.details',compact('details','shareComponent'));
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
            'first_name'        => 'required|string',
            'last_name'         => 'required|string',
            'address'           => 'required|string',
            'optional_address'  => 'nullable|string',
            'city'              => 'required|string',
            'postcode'          => 'required|string',
            'phone'             => 'required|string',
            'email'             => 'required|email',
            'note'              => 'nullable|string',
            'total_price'       => 'nullable|numeric|min:0',
            'name'              => 'nullable|string',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        $subtotal = $request->input('total_price');

         // Convert array of product names to a single comma-separated string
        $productNames = implode(', ', $request->input('product_names', []));

        //dd($request->all());

        $order = Order::create([
            "first_name"        =>$request->first_name,
            "last_name"         =>$request->last_name,
            "address"           =>$request->address,
            "optional_address"  =>$request->optional_address,
            "city"              =>$request->city,
            "postcode"          =>$request->postcode,
            "phone"             =>$request->phone,
            "email"             =>$request->email,
            "note"              =>$request->note,
            "total_price"       => $request->total_price,
            "total_price"       => $subtotal,
            "name"              => $request->name,
            "name"              => $productNames,
            "user_id"           => $request->user_id,
            "product_id"           => $request->product_id,
        ]);



        $admins = User::where('role', 'admin')->get(); 
         Notification::send($admins, new OrderReceivedNotification($order));

       $order->save();

        session()->forget('cart');

        notify()->success('Success, Order Confirmed!');

        return redirect()->route('home');

    }


    public function singleProductCheckout($id){


        $product = Product::findOrFail($id);
        $orders= Order::find($id);
        return view('frontend.pages.product.checkoutSigleProduct',compact('product','orders'));
    }
}
