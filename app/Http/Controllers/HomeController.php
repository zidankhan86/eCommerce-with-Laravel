<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){

        $totalOrder = Order::get()->count();
        $totalProducts = Product::get()->count();
        $totalCategories = Category::get()->count();


        return view('backend.pages.dashboard',compact('totalOrder','totalProducts','totalCategories'));
    }
}
