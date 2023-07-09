<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/category-form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('category.store');


Route::get('/product-form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product-store',[ProductController::class,'productStore'])->name('product.store');
