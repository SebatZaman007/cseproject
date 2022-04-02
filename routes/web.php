<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\frontend\HomeController;

use App\Http\Controllers\Admin\BannerimageController;
use App\Http\Controllers\Admin\ShoworderController;

Route::get('/layout',[MasterController::class,'layoutIndex'])->name('layout.index');//for layout-index

//frontend
Route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');//for-auth

Route::get('/',[HomeController::class,'homeIndex'])->name('home.index');//for forntend-home.

Route::get('/aboutpage',[HomeController::class,'showAbout'])->name('show.about');//for aboutpage
Route::get('/contactpage',[HomeController::class,'showContact'])->name('show.contact'); //for contact page
Route::get('/productpage',[HomeController::class,'showProduct'])->name('show.product'); //for product page
Route::get('/search',[HomeController::class,'searchProduct'])->name('search.product'); //for search product
Route::post('/addcart/{id}',[HomeController::class,'addCart'])->name('add.cart'); //for add-cart product
Route::get('/showcart',[HomeController::class,'showCart'])->name('show.cart'); //for show-cart product
Route::get('/showcart-delete/{id}',[HomeController::class,'showproductDelete'])->name('showproduct.delete'); //for add-cart product
Route::post('/confirm-order',[HomeController::class,'confirmOrder'])->name('confirm.order'); //for confirm-order
Route::get('/total-price',[HomeController::class,'totalPrice'])->name('total.price'); //for total price
Route::get('/checkout-form',[HomeController::class,'checkoutForm'])->name('checkout.form'); //for checkout form

//******************CMS*********************

//for banner
Route::get('/bannerimage-index',[BannerimageController::class,'bannerimageIndex'])->name('bannerimage.index');
Route::get('/bannerimage-create',[BannerimageController::class,'bannerimageCreate'])->name('bannerimage.create');
Route::post('/bannerimage-store',[BannerimageController::class,'bannerimageStore'])->name('bannerimage.store');
Route::get('/bannerimage-edit/{id}',[BannerimageController::class,'bannerimageEdit'])->name('bannerimage.edit');
Route::post('/bannerimage-update',[BannerimageController::class,'bannerimageUpdate'])->name('bannerimage.update');
Route::get('/bannerimage-delete/{id}',[BannerimageController::class,'bannerimageDelete'])->name('bannerimage.delete');

//for about
Route::get('/about-index',[AboutController::class,'aboutIndex'])->name('about.index');
Route::get('/about-create',[AboutController::class,'aboutCreate'])->name('about.create');
Route::post('/about-store',[AboutController::class,'aboutStore'])->name('about.store');
Route::get('/about-edit/{id}',[AboutController::class,'aboutEdit'])->name('about.edit');
Route::post('/about-update',[AboutController::class,'aboutUpdate'])->name('about.update');
Route::get('/about-delete/{id}',[AboutController::class,'aboutDelete'])->name('about.delete');
//

//for contact

Route::get('/contact-index',[ContactController::class,'contactIndex'])->name('contact.index');
Route::post('/contact-store',[ContactController::class,'contactStore'])->name('contact.store');
//

//for Client
Route::get('/client-index',[ClientController::class,'clientIndex'])->name('client.index');
Route::get('/client-create',[ClientController::class,'clientCreate'])->name('client.create');
Route::post('/client-store',[ClientController::class,'clientStore'])->name('client.store');
Route::get('/client-edit/{id}',[ClientController::class,'clientEdit'])->name('client.edit');
Route::post('/client-update',[ClientController::class,'clientUpdate'])->name('client.update');
Route::get('/client-delete/{id}',[ClientController::class,'clientDelete'])->name('client.delete');

//

//for footer

Route::get('/footer-index',[FooterController::class,'footerIndex'])->name('footer.index');
Route::get('/footer-create',[FooterController::class,'footerCreate'])->name('footer.create');
Route::post('/footer-store',[FooterController::class,'footerStore'])->name('footer.store');
Route::get('/footer-edit/{id}',[FooterController::class,'footerEdit'])->name('footer.edit');
Route::post('/footer-update',[FooterController::class,'footerUpdate'])->name('footer.update');
Route::get('/footer-delete/{id}',[FooterController::class,'footerDelete'])->name('footer.delete');


//



//*******************************end CMS************* */

//for Auth
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//

//for product upload backend

Route::get('/product-index',[ProductController::class,'productIndex'])->name('product.index');
Route::get('/product-create',[ProductController::class,'productCreate'])->name('product.create');
Route::post('/product-store',[ProductController::class,'productStore'])->name('product.store');
Route::get('/product-edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
Route::post('/product-update',[ProductController::class,'productUpdate'])->name('product.update');
Route::get('/product-delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');
//********************** */

//***************Show Order**************//

Route::get('/show-order',[ShoworderController::class,'showOrder'])->name('show.order');
Route::get('/update-status/{id}',[ShoworderController::class,'updateStatus'])->name('update.status');







