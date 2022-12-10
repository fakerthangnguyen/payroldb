<?php

use App\Http\Controllers\DashboardContronller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KhachHangController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login', [KhachHangController::class, 'index']);
Route::post('/login', [KhachHangController::class, 'actionLogin']);
Route::get('/index',[DashboardContronller::class, 'index']);

Route::get('/employeeIndex',[EmployeeController::class, 'index']);
Route::get('/employeeData',[EmployeeController::class, 'index']);
Route::get('/employeeCreate',[DashboardContronller::class, 'employeeCreate']);
Route::post('/employeeCreate', [EmployeeController::class, 'employeeCreate']);
Route::post('/delete', [EmployeeController::class, 'delete']);
Route::post('/update', [EmployeeController::class, 'update']);



Route::get('/employeeData',[EmployeeController::class, 'getData']);
