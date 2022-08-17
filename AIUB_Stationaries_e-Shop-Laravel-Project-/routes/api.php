<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAPIController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/product/list',[ProductAPIController::class,'list']);

Route::get('/Profile',[CustomerController::class,'Profile']);


//Route::post('/loginform', [LoginController::class, 'loginform']);
//Route::post('/Registertion', [Apiprofile::class, 'sigpupform']);

Route::get('/logcustomer/Login', [LoginController::class, 'Login']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/signup', [CustomerController::class, 'signup'])->name('signup');
Route::post('/signup', [CustomerController::class, 'signupsubmitted'])->name('signup');
