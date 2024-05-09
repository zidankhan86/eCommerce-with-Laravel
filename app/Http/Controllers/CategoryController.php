<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function categoryForm(){

        $products = Product::all();
        return view('backend.pages.category.categoryForm',compact('products'));
    }

    public function categoryStore(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'type'          => 'required|string|unique:categories',
            'status'        =>'required'
        ]);

    if ($validator->fails()) {

        return redirect()->back()->withErrors($validator)->withInput();
    }

       // dd($request->all());

        Category::create([

            "type"      =>$request->type,
            "status"    =>$request->status

        ]);

        return back()->with('success', 'Category Added Successfully');

    }
    public function categoryList(){
        $category = Category::latest()->get();
        return view('backend.pages.category.categoryList',compact('category'));
    }


    public function categoryedit($id){
        $edit = Category::find($id);
        return view('backend.pages.category.edit',compact('edit'));
    }


    public function categorupdate(Request $request ,$id){
  // dd($request->all());
  $validator = Validator::make($request->all(), [
    'name' => 'required|string',
    'type' => 'required|string|unique:categories',
            'status'=>'required'
        ]);

        if ($validator->fails()) {

        return redirect()->back()->withErrors($validator)->withInput();
        }


        $update = Category::find($id);
        $update->update([

            "name"=>$request->name,
            "type"=>$request->type,
            "status"=>$request->status

        ]);

        Alert::toast()->success('Category Updated');
        return redirect()->route('category.list');
    }

    public function categordelete($id){
        $delete = Category::find($id);
        $delete->delete();

        return back();
    }
    public function websiteTitle(){
        $category=Category::all();
        return view('backend.pages.category.subCategory',compact('category'));
    }



}
