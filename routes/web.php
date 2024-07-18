<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// user routes
Route::get('/', function () {
    return view('home');
});

Route::get('/order-detail', [OrderController::class, 'orderDetail']);
Route::get('/cart', [OrderController::class, 'Cart']);


// admin routes
Route::post('/login', [AuthController::class, 'login']);
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin/login');
Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth:sanctum')->get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('admin/dashboard');
Route::middleware('auth:sanctum')->get('/admin/category', [AdminController::class, 'admincategory'])->name('admin/category');
Route::middleware('auth:sanctum')->get('/admin/product', [AdminController::class, 'adminproduct'])->name('admin/product');
Route::middleware('auth:sanctum')->get('/admin/product/add', [AdminController::class, 'adminaddproduct'])->name('admin/product/add');
Route::post('/admin/categories/store', [AdminController::class, 'categorystore'])->name('admin.categories.store');
Route::get('/admin/categories/list', [AdminController::class, 'list'])->name('admin.categories.list');
Route::post('/admin/categories/update/{id}', [AdminController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/delete/{id}', [AdminController::class, 'destroy'])->name('admin.categories.destroy');


