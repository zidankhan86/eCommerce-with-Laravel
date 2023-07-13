<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){

        $orders = Order::all();
        return view('backend.pages.order.orderList',compact('orders'));
    }
}
