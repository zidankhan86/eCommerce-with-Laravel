<?php

namespace App\Livewire;

use Livewire\Component;

class ProductDetails extends Component
{
    public $productId;
    public $productDetails;

    public function mount($id){
        $this->productId = $id;
        $this->LoadProductDetails;
    }

    public function LoadProductDetails(){
        $this->productDetails = Product::find($this->productId);
    }
    public function render()
    {
        return view('livewire.product-details');
    }
}
