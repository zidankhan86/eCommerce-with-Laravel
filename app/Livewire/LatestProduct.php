<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class LatestProduct extends Component
{
    public function render()
    {
        $latestProducts = Product::where('status',1)->latest()->limit(6)->get();
        return view('livewire.latest-product',compact('latestProducts'));
    }
}
