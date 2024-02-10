<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class TrendingProduct extends Component
{
    public function render()
    {
        $trendingProduct = Product::where('status',2)->latest()->limit(8)->get();
        return view('livewire.trending-product',compact('trendingProduct'));
    }
}
