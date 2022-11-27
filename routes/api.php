<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\PayratesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('khach_hangs/{id?}',[KhachHangController::class, 'index']);
// Route::get('categorises/{id?}' ,[CategoriesController::class, 'index']);
// Route::get('products/{id?}' ,[ProductController::class, 'index']);



//api employee
Route::get('employee/{a:idEmployee?}' ,[KhachHangController::class, 'payrol']);
Route::post('employee',[KhachHangController::class, 'create']);
Route::put('employee/{a}',[KhachHangController::class, 'update']);
Route::delete('employee/{a}',[KhachHangController::class, 'delete']);

//api payrates
Route::get('pay_rates/{b:idPay_Rates?}' ,[PayratesController::class, 'index']);
Route::post('pay_rates',[PayratesController::class, 'create']);
Route::put('pay_rates/{b}',[PayratesController::class, 'update']);
Route::delete('pay_rates/{b}',[PayratesController::class, 'delete']);


//api users
Route::get('users/{c:User_ID?}' ,[UsersController::class, 'index']);
Route::post('users',[UsersController::class, 'create']);
Route::put('users/{c}',[UsersController::class, 'update']);
Route::delete('users/{c}',[UsersController::class, 'delete']);










