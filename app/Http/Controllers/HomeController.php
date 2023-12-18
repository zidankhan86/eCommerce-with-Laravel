<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function dashboard(){

        $totalOrder         = Order::get()->count();
        $totalProducts      = Product::get()->count();
        $totalCategories    = Category::get()->count();
        $ordersPerDay       = Order::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) 
                                        as orders_count'))
                                    ->groupBy('date')
                                    ->orderBy('date', 'asc')
                                    ->get();

        return view('backend.pages.dashboard',compact('totalOrder','totalProducts','totalCategories', 'ordersPerDay'));
    }
}
