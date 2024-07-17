<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
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
    return view('home');
});

Route::get('/order-detail', [OrderController::class, 'orderDetail']);
Route::get('/cart', [OrderController::class, 'Cart']);
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('admin/dashboard');
Route::get('/admin/category', [AdminController::class, 'admincategory'])->name('admin/category');
Route::get('/admin/product', [AdminController::class, 'adminproduct'])->name('admin/product');
Route::get('/admin/product/add', [AdminController::class, 'adminaddproduct'])->name('admin/product/add');



