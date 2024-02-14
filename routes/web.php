<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\HeroBannerController;
use App\Http\Controllers\CompanyLogoController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;





Route::get('/',[FrontendHomeController::class,'home'])->name('home');
//hero
Route::get('/hero',[HeroBannerController::class,'hero']);
//product
Route::get('/product',[FrontendProductController::class,'product']);
Route::get('/product-details/{id}',[FrontendProductController::class,'productDetails']);
Route::get('/search',[SearchController::class,'search'])->name('user.search');
//Blog
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/blog-page',[BlogController::class,'blogPage']);
Route::post('/comment-store',[CommentController::class,'commentStore'])->name('commentStore');
//CategoryWiseProduct
Route::get('/category/{id}',[FrontendHomeController::class,'categoryWiseProduct']);
//ContactUs
Route::get('/contact',[ContactController::class,'contact']);
Route::post('/contact-form',[ContactController::class,'contactForm'])->name('contact.form.store');
//login
Route::get('/login-frontend', [LoginController::class, 'showLoginFormFrontend'])->name('login.frontend');
//profile
Route::get('/profile',[ProfileController::class,'profile']);
Route::get('/admin-profile',[ProfileController::class,'adminProfile']);
//AddToCard
Route::get('add-to-cart/{id}',[AddToCartController::class,'addToCart'])->name('add.to.cart');
Route::get('/view-cart',[AddToCartController::class,'viewCart']);
Route::get('/clear-cart',[AddToCartController::class,'clearCart'])->name('cart.clear');
Route::get('/cart-item/delete/{id}',[AddToCartController::class,'cartItemDelete'])->name('cart.item.delete');

 //Wishlist
 Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
 Route::post('/wishlist/add/{id}', [WishlistController::class,'addToWishlist'])->name('add.to.wishlist');
 Route::get('/wishlist/remove/{wishlist}', [WishlistController::class, 'removeFromWishlist'])->name('remove.Wishlist');
 Route::post('/cart/add-from-wishlist/{id}', [WishlistController::class, 'addToCartFromWishlist'])->name('cart.add-from-wishlist');

//Backend

//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Registration
Route::get('/registration', [LoginController::class, 'registration'])->name('registration');
Route::post('/registration', [LoginController::class, 'registrationStore'])->name('registration.submit');

//Forget password
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');

//Middleware for check valid user
Route::group(['middleware' => 'customerAuth'], function () {
//Cart Product Order
Route::get('/product-checkout/{id}',[FrontendProductController::class,'productCheckout'])->name('product.checkout');
//Single Product Order
Route::get('/product-checkout-single/product/{id}',[FrontendProductController::class,'singleProductCheckout']);
//Order Create for both
Route::post('/product-order/{id}',[FrontendProductController::class,'order'])->name('product.order.store');
//Order Tracking
Route::get('/order/tracking/{id}',[OrderController::class,'orderTracking'])->name('order.tracking');
});

//middleware auth and admin
Route::group(['middleware' => 'auth','admin','prefix'=>'admin'], function () {
//Notification
Route::get('/admin/notifications', [NotificationController::class, 'notifications'])->name('admin.notifications');

//Category
Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/category-form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::get('/sub-category-form',[CategoryController::class,'SubcategoryForm'])->name('sub.category.form');
Route::post('/sub-category-store',[CategoryController::class,'subCategoryStore'])->name('sub.category.store');
Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('category.store');
Route::get('/category-list',[CategoryController::class,'categoryList'])->name('category.list');
Route::get('/category-edit/{id}',[CategoryController::class,'categoryedit'])->name('category.edit');
Route::post('/category-update/{id}',[CategoryController::class,'categorupdate'])->name('category.update');
Route::get('/category-delete/{id}',[CategoryController::class,'categordelete'])->name('category.delete');

//Product
Route::get('/product-form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product-store',[ProductController::class,'productStore'])->name('product.store');
Route::get('/product-list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product-edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
Route::post('/product-update/{id}',[ProductController::class,'productupdate'])->name('product.update');
Route::get('/product-delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');
Route::get('/new-arrival-product-form',[ProductController::class,'NewArrivalproductForm'])->name('new.arrival.product.form');
Route::get('/new-arrival-product-list',[ProductController::class,'NewArrivalproductList'])->name('new.arrival.product.list');
Route::post('/new-product-store',[ProductController::class,'newProductStore'])->name('new.product.store');
Route::post('/product/rate/{id}', [ProductController::class,'storeRating'])->name('product.rate');

//Trending Products
Route::get('/trending/product', [ProductController::class,'trendingProduct'])->name('trending.product');
Route::get('/trending/status/{id}', [ProductController::class,'trendingStatus'])->name('trending.status');

//Banner
Route::get('/banner-form-one',[BannerController::class,'bannerFormOne'])->name('banner.form.one');
Route::get('/banner-list-one',[BannerController::class,'bannerListOne'])->name('banner.list.one');
Route::post('/banner-store-one',[BannerController::class,'bannerStoreOne'])->name('banner.store.one');
Route::get('/bander-one-delete/{id}',[BannerController::class,'bannerOneDelete'])->name('banner.one.delete');
Route::get('/banner-form-two',[BannerController::class,'bannerFormTwo'])->name('banner.form.two');
Route::get('/banner-list-two',[BannerController::class,'bannerListTwo'])->name('banner.list.two');
Route::post('/banner-store-two',[BannerController::class,'bannerStoreTwo'])->name('banner.store.two');
Route::get('/bander-two-delete/{id}',[BannerController::class,'bannerTwoDelete'])->name('banner.two.delete');
Route::get('/banner-form',[BannerController::class,'bannerForm'])->name('banner.form');
Route::post('/banner-store',[BannerController::class,'bannerStore'])->name('banner.store');
Route::get('/banner-list',[BannerController::class,'bannerlist'])->name('banner.list');
Route::post('/banner-update/{id}',[BannerController::class,'bannerupdate'])->name('banner.update');
Route::get('/banner-delete/{id}',[BannerController::class,'bannerdelete'])->name('banner.delete');
Route::get('/banner-edit/{id}',[BannerController::class,'banneredit'])->name('banner.edit');

//Logo
Route::get('/logo-form',[CompanyLogoController::class,'LogoForm'])->name('logo.form');
Route::post('/logo-store',[CompanyLogoController::class,'LogoStore'])->name('logo.store');
Route::get('/logo-delete',[CompanyLogoController::class,'LogoDelete'])->name('logo.delete');
Route::get('/logo-list',[CompanyLogoController::class,'LogoList'])->name('logo.list');

//Blog
Route::get('/blog-form',[BlogController::class,'blogPost'])->name('blog.post');
Route::post('/blog-store',[BlogController::class,'blogStore'])->name('blog.store');
Route::get('/blog-list',[BlogController::class,'bloglist'])->name('blog.list');
Route::get('/blog-delete/{id}',[BlogController::class,'blogdelete'])->name('blog.delete');

//Hero
Route::get('/hero-form',[HeroBannerController::class,'heroPost'])->name('hero.post');
Route::post('/hero-store',[HeroBannerController::class,'herostore'])->name('hero.store');
Route::get('/hero-list',[HeroBannerController::class,'herolist'])->name('hero.list');
Route::get('/hero-delete/{id}',[HeroBannerController::class,'herodelete'])->name('hero.delete');

//Order
Route::get('/order-list',[OrderController::class,'orderList'])->name('order.list');
Route::get('/order-invoice/{id}',[OrderController::class,'orderinvoice'])->name('order.invoice');
Route::get('/report',[ReportController::class,'report'])->name('report');
Route::get('/report/search',[ReportController::class,'reportSearch'])->name('order.report.search');

Route::get('/contact-list',[ContactController::class,'contactlist'])->name('contact.list');
Route::get('/contact-view/{id}',[ContactController::class,'contactview'])->name('contact.view');

});
