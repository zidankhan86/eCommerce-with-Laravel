<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchResult=Product::where('name','LIKE','%'.$request->search_key.'%')->get();

      return view('frontend.pages.search.search',compact('searchResult'));
    }
}
