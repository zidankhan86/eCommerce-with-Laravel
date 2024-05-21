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
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;


//========Routes=======//

Route::get('/',[FrontendHomeController::class,'home'])->name('home');
//hero
Route::get('/hero',[HeroBannerController::class,'hero']);
//product
Route::get('/product',[FrontendProductController::class,'product']);
Route::get('/product-details/{id}',[FrontendProductController::class,'productDetails'])->name('details');
Route::get('/search',[SearchController::class,'search'])->name('user.search');

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



 //Social share
Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);

//Backend

//Login //Registration
Route::controller(LoginController::class)->group(function(){
    Route::get('/login','showLoginForm')->name('login');
    Route::post('/login','loginProcess')->name('login.submit');
    Route::get('/logout','logout')->name('logout');
    Route::get('/registration', 'registration')->name('registration');
    Route::post('/registration', 'registrationStore')->name('registration.submit');
});




//Forget password
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');

//Middleware for check valid user
Route::group(['middleware' => 'customerAuth'], function () {
    //AddToCard
Route::controller(AddToCartController::class)->group(function(){
    Route::get('add-to-cart/{id}','addToCart')->name('add.to.cart');
    Route::get('/view-cart','viewCart');
    Route::get('/clear-cart','clearCart')->name('cart.clear');
    Route::get('/cart-item/delete/{id}','cartItemDelete')->name('cart.item.delete');
    });
    //Wishlist
 Route::controller(WishlistController::class)->group(function(){
    Route::get('/wishlist',  'index')->name('wishlist.index');
    Route::post('/wishlist/add/{id}', 'addToWishlist')->name('add.to.wishlist');
    Route::get('/wishlist/remove/{wishlist}','removeFromWishlist')->name('remove.Wishlist');
    Route::post('/cart/add-from-wishlist/{id}','addToCartFromWishlist')->name('cart.add-from-wishlist');
 });


//Cart Product Order
Route::get('/product-checkout/{id}',[FrontendProductController::class,'productCheckout'])->name('product.checkout');
//Single Product Order
// Route::get('/product-checkout-single/product/{id}',[FrontendProductController::class,'singleProductCheckout']);
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

//Category
Route::controller(CategoryController::class)->group(function(){
    Route::get('/category-form','categoryForm')->name('category.form');
    Route::get('/website-title-form','websiteTitle')->name('website.form');
    Route::post('/category-store','categoryStore')->name('category.store');
    Route::get('/category-list','categoryList')->name('category.list');
    Route::get('/category-edit/{id}','categoryedit')->name('category.edit');
    Route::post('/category-update/{id}','categorupdate')->name('category.update');
    Route::get('/category-delete/{id}','categordelete')->name('category.delete');
});

//Product
Route::controller(ProductController::class)->group(function(){
    Route::get('/product-form','productForm')->name('product.form');
    Route::post('/product-store','productStore')->name('product.store');
    Route::get('/product-list','productList')->name('product.list');
    Route::get('/product-edit/{id}','productEdit')->name('product.edit');
    Route::post('/product-update/{id}','productupdate')->name('product.update');
    Route::get('/product-delete/{id}','productDelete')->name('product.delete');
    Route::post('/product/rate/{id}','storeRating')->name('product.rate');
    //Trending Products
    Route::get('/trending/product', 'trendingProduct')->name('trending.product');
    Route::get('/trending/status/{id}','trendingStatus')->name('trending.status');
});

//Banner
Route::controller(BannerController::class)->group(function(){
    Route::get('/banner-form-one','bannerFormOne')->name('banner.form.one');
    Route::get('/banner-list-one','bannerListOne')->name('banner.list.one');
    Route::post('/banner-store-one','bannerStoreOne')->name('banner.store.one');
    Route::get('/bander-one-delete/{id}','bannerOneDelete')->name('banner.one.delete');
    Route::get('/banner-form-two','bannerFormTwo')->name('banner.form.two');
    Route::get('/banner-list-two','bannerListTwo')->name('banner.list.two');
    Route::post('/banner-store-two','bannerStoreTwo')->name('banner.store.two');
    Route::get('/bander-two-delete/{id}','bannerTwoDelete')->name('banner.two.delete');
    Route::get('/banner-form','bannerForm')->name('banner.form');
    Route::post('/banner-store','bannerStore')->name('banner.store');
    Route::get('/banner-list','bannerlist')->name('banner.list');
    Route::post('/banner-update/{id}','bannerupdate')->name('banner.update');
    Route::get('/banner-delete/{id}','bannerdelete')->name('banner.delete');
    Route::get('/banner-edit/{id}','banneredit')->name('banner.edit');
});
//Logo
Route::controller(CompanyLogoController::class)->group(function(){
    Route::get('/logo-form','LogoForm')->name('logo.form');
    Route::post('/logo-store','LogoStore')->name('logo.store');
    Route::get('/logo-delete/{id}','LogoDelete')->name('logo.delete');
    Route::get('/logo-list','LogoList')->name('logo.list');
    Route::get('/logo-edit/{id}','Logo_edit')->name('logo.edit');
    Route::post('/logo-update/{id}','logo_update')->name('logo.update');
});

//Hero
Route::controller(HeroBannerController::class)->group(function(){
    Route::get('/hero-form','heroPost')->name('hero.post');
    Route::post('/hero-store','herostore')->name('hero.store');
    Route::get('/hero-list','herolist')->name('hero.list');
    Route::get('/hero-delete/{id}','herodelete')->name('hero.delete');
});

//Order
Route::controller(OrderController::class)->group(function(){
    Route::get('/order-list','orderList')->name('order.list');
    Route::get('/order-invoice/{id}','orderinvoice')->name('order.invoice');
    
});

Route::controller(ReportController::class)->group(function(){

    Route::get('/report','report')->name('report');
    Route::get('/report/search','reportSearch')->name('order.report.search');
});

Route::get('/contact-list',[ContactController::class,'contactlist'])->name('contact.list');
Route::get('/contact-view/{id}',[ContactController::class,'contactview'])->name('contact.view');

});
