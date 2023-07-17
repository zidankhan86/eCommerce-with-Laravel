<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroBannerController extends Controller
{
    public function heroPost(){
        return view('backend.pages.heroBanner.heroBannerForm');
    }
}
