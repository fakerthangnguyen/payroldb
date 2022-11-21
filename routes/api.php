<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\ProductController;
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

Route::get('khach_hangs/{id?}',[KhachHangController::class, 'index']);
Route::get('categorises/{id?}' ,[CategoriesController::class, 'index']);
Route::get('products/{id?}' ,[ProductController::class, 'index']);




Route::get('employee/{idEmployee?}' ,[KhachHangController::class, 'payrol']);

