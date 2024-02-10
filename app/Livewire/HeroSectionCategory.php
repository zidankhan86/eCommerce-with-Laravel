<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;

class HeroSectionCategory extends Component
{
    public function render()
    {
         //Category
         $categories = Category::latest()->limit(11)->get();
         $subcategories = SubCategory::all();
        return view('livewire.hero-section-category',compact('categories'));
    }
}
