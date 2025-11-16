<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CostumerAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// LANDING 
Route::get('/', [PageController::class, 'index']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/wishlist', [PageController::class, 'wishlist']);
Route::get('/cart', [CartController::class, 'cart']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/auth', [PageController::class, 'auth']);
Route::get('/product/{slug}/detail', [ProductController::class, 'detail']);

// DASHBOARD
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/{product}/invoice', [ProductAdminController::class, 'invoice']);

Route::get('/admin/category', [ProductAdminController::class, 'category']);
Route::get('/admin/product', [ProductAdminController::class, 'index']);
Route::get('/admin/product/tambah', [ProductAdminController::class, 'tambah']);
Route::get('/admin/product/{slug}/detail', [ProductAdminController::class, 'detail']);

Route::get('/admin/order', [OrderAdminController::class, 'index']);
Route::get('/admin/order/{order}/detail', [OrderAdminController::class, 'detail']);

Route::get('/admin/customer', action: [CostumerAdminController::class, 'index']);