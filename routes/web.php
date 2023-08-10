<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/account',[HomeController::class, 'account'])->name('account');
    Route::get('/forum',[ForumController::class, 'index'])->name('forum');
Route::post('/forum',[ForumController::class,'store'])->name('create-post');
Route::post('/comment',[ForumController::class,'store_comment'])->name('create-comment');
Route::get('/price-pdf', [ResourceController::class, 'pdfreport'])->name('pdf1');
Route::get('/guideline-pdf', [ResourceController::class, 'guideline_pdf'])->name('guideline_pdf');
});

Route::get('/',[HomeController::class, 'homepage'])->name('homepage');
Route::get('/home',[HomeController::class, 'homepage'])->name('homepage');
Route::get('/detail',[HomeController::class, 'detail'])->name('detail');
Route::get('product_practices',[ProductController::class,'product_practices'])->name('product_practices');
Route::get('/product/{id}',[ProductController::class,'show'])->name('product-item');

Route::get('/consultant', [ContactController::class, 'create'])->name('create_contact');
Route::post('consultant',[ContactController::class,'store'])->name('save_contact');

//Admin 

Route::get('admin-panel',[ProductController::class,'index'])->name('admin-panel');

Route::get('create-product',[ProductController::class,'create'])->name('create-product');
Route::post('create-product',[ProductController::class,'store'])->name('create-product');

Route::get('/users', [ProductController::class, 'view_users'])->name('users');
Route::get('/contacts', [ProductController::class, 'view_contacts'])->name('contacts');
Route::get('/view-products', [ProductController::class, 'view_products'])->name('view_products');

Route::get('create-product-price',[ProductController::class,'create_prices'])->name('create-product-price');
Route::post('create-product-price',[ProductController::class,'store_prices'])->name('create-product-price');

Route::get('update-product-price/{id}',[ProductController::class,'update_prices'])->name('update-product-price');
Route::post('update-product-price',[ProductController::class,'store_updated_prices'])->name('update-product-price');

Route::get('delete-product-price/{id}',[ProductController::class,'delete_product_price'])->name('delete_product_price');


Route::get('update-product/{id}',[ProductController::class,'update_products'])->name('update-product');
Route::post('update-product',[ProductController::class,'store_updated_products'])->name('update-product');
Route::get('delete-product/{id}',[ProductController::class,'delete_products'])->name('delete_product');






//Resources 



Route::get('/resources', [ResourceController::class, 'resource_homepage'])->name('resource_homepage');

Route::get('/price-reports', [ResourceController::class, 'pricereport'])->name('pricereport');


Route::get('/resource-guideline', [ResourceController::class, 'guideline'])->name('guideline');




Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
