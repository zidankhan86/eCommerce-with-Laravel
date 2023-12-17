<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\NewArrival;
use Illuminate\Http\Request;
use App\Models\ProductRating;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function productForm(){

        $categories = Category::all();
        return view('backend.pages.product.productForm',compact('categories'));
    }

    public function productStore(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name'                  => 'required|string',
            'category_id'           => 'required',
            'image'                 => 'nullable|max:200',
            'weight'                => 'required|numeric',
            'stock'                 => 'required|integer',
            'product_stock'         =>'required',
            'price'                 => 'required|numeric',
            'discount'              => 'nullable|numeric|max:100',
            'time'                  => 'required',
            'description'           => 'required',
            'product_information'   => 'required',
            'status'                => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $images=null;
        if ($request->hasFile('image')) {
            $images=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $images, 'public');
        }
        //dd($imageName);
        // dd($request->all());


        $product=  Product::create([

             "name"                 =>$request->name,
             "category_id"          =>$request->category_id,
             "image"                =>$images,
             "weight"               =>$request->weight,
             "stock"                =>$request->stock,
             "product_stock"        =>$request->product_stock,
             "price"                =>$request->price,
             "discount"             =>$request->discount,
             "time"                 =>$request->time,
             "description"          =>$request->description,
             'product_information'  =>$request->product_information,
             'status'               =>$request->status,

          ]);

          if ($product) {
            // Assuming $product->discount is the discount percentage (e.g., 70%)
            $discountPercentage = $product->discount / 100;
            $originalPrice = $product->price;

            // Calculate the discounted price
            $discountedPrice = $originalPrice - ($originalPrice * $discountPercentage);

            // Update the product's discounted price
            $product->update(['discounted_price' => $discountedPrice]);
        }


          return back()->with('success', 'Product Added Successfully!');

        }

        public function NewArrivalproductForm(){

            return view('backend.pages.product.newArrivalProductForm');
        }

          public function newProductStore(Request $request){



           // dd($request->all());

            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'image' => 'nullable',
                'weight' => 'required|numeric',
                'stock' => 'required|integer',
                'price' => 'required|numeric',
                //'discount' => 'nullable|numeric|max:100',
                'time' => 'required',
                'description' => 'required',

            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


        //dd($request->all());

        $imageName=null;
        if ($request->hasFile('image')) {
            $imageName=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');


           // dd($imageName);
        }

              NewArrival::create([

             "name"=>$request->name,
             "image"=>$imageName,
             "weight"=>$request->weight,
             "stock"=>$request->stock,
             "price"=>$request->price,
             "discount"=>$request->discount,
             "time"=>$request->time,
             "description"=>$request->description,
          ]);
          return back()->with('success', 'New Arrival Added Successfully!');
    }

    public function NewArrivalproductList(){
        $products = NewArrival::latest()->get();
        return view('backend.pages.product.newArrivalProductList',compact('products'));
    }


        public function productList(){

            $products = Product::latest()->get();

            return view('backend.pages.product.productList',compact('products'));
        }

        public function productEdit($id){

            $categories = Category::all();

            $edit = Product::find($id);
            return view('backend.pages.product.edit',compact('edit','categories'));
        }

        public function productupdate( Request $request ,$id){


           // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|max:200',
            'weight' => 'required',
            'stock' => 'required|integer',
            'product_stock'=>'required',
            'price' => 'required',
            'time' => 'required',
            'description' => 'required',
            'product_information'=> 'required',
            'status'=> 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $images=null;
        if ($request->hasFile('image')) {
            $images=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $images, 'public');
        }
            //dd($imageName);
            //dd($request->all());

            $update=Product::find($id);

            $update->update([
                "name"=>$request->name,
             "category_id"=>$request->category_id,
             "image"=>$images,
             "weight"=>$request->weight,
             "stock"=>$request->stock,
             "product_stock"=>$request->product_stock,
             "price"=>$request->price,
             "discount"=>$request->discount,
             "time"=>$request->time,
             "description"=>$request->description,
             'product_information' =>$request->product_information,
             'status' =>$request->status,
            ]);

            Alert::toast()->success('Your post has been edited');
            return redirect()->route('product.list');

        }

        public function productDelete($id){

            $delete =  Product::find($id);
            $delete->delete();


            Alert::toast('Deleted! Product Deleted');

            return redirect()->back();
        }

        public function storeRating(Request $request, $id)
        {
            //dd($request->all());
            $request->validate([
                'rating'=>'required'
            ]);
            $product = Product::find($id);

            $rating = new ProductRating();
            $rating->product_id = $product->id;
            $rating->rating = $request->input('rating');
            $rating->save();

            // Redirect back to the product details page
            //return redirect()->route('product-details', ['id' => $productId]);
            notify()->success('Thank you for your feedback.');
            return back();
            }



            //Trending Product
              public function trendingProduct(){
                $trendingProduct = Product::where('status',2)->latest()->limit(8)->get();
                return view('frontend.components.trendingProduct',compact('trendingProduct'));
            }
            public function trendingStatus($id){
                $product = Product::find($id);
                $product->update([
                    "status"=>"2"
                ]);

                Alert::toast()->success('Your status has been changed');
                return redirect()->route('product.list');

            }

            }
