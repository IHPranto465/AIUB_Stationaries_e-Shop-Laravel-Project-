<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/product', [ProductController::class, 'productlist'])->name('product');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login');
Route::get('/signup', [CustomerController::class, 'signup'])->name('signup');
Route::post('/signup', [CustomerController::class, 'signupsubmitted'])->name('signup');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->name('products.addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->name('products.emptycart');
Route::get('/cart',[ProductController::class,'mycart'])->name('products.mycart');
Route::post('/checkout',[ProductController::class,'checkout'])->middleware('ValidCustomer')->name('checkout');


Route::get('/customer/myorders',[CustomerController::class,'myorders'])->middleware('ValidCustomer')->name('customer.myorders');
Route::get('/customer/myorders/details/{id}',[CustomerController::class,'orderdetails'])->middleware('ValidCustomer')->name('customer.myorders.details');
Route::get('/customer/myorders/delete/{id}',[CustomerController::class,'deletedetails'])->middleware('ValidCustomer')->name('customer.myorders.deletedetails');

//delivery man details
Route::get('/customer/deliverymandetails',[CustomerController::class,'delivery'])->name('customer.deliverymandetails');

Route::get('/chat',[ProductController::class,'chat'])->name('chat');
Route::post('/chat',[ProductController::class,'chatsub'])->name('chat');

//Seller details
Route::get('/customer/Sellerdetails',[CustomerController::class,'seller'])->name('customer.Sellerdetails');

Route::get('/message2',[ProductController::class,'message2'])->name('message2');
Route::post('/message2',[ProductController::class,'message2'])->name('message2');

//add prod
Route::get('/report',[ProductController::class,'report'])->name('report');
Route::post('/report',[ProductController::class,'reportSubmit'])->name('report');

//customer edit
Route::get('/customer/profile',[CustomerController::class,'profile'])->middleware('ValidCustomer')->name('profile');
Route::post('/customer/profile',[CustomerController::class,'profileSubmit'])->middleware('ValidCustomer')->name('profileSubmit');

//Search

Route::get('/search',[ProductController::class,'search'])->name('search');
Route::post('/search',[ProductController::class,'search'])->name('search');
