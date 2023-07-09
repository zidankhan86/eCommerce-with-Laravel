<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryForm(){
        return view('backend.pages.category.categoryForm');
    }
}
