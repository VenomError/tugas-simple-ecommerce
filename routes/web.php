<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

// LANDING 
Route::get('/', [MenuController::class, 'index']);
Route::get('/account', [MenuController::class, 'account']);
Route::get('/shop', [MenuController::class, 'shop']);
Route::get('/wishlist', [MenuController::class, 'wishlist']);
Route::get('/cart', [MenuController::class, 'cart']);
Route::get('/checkout', [MenuController::class, 'checkout']);
Route::get('/product/{slug}/detail', [MenuController::class, 'detailProduct']);

// AUTH CONTROLLER
Route::get('/auth', [MenuController::class, 'auth']);
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::post('/register', [AuthController::class, 'registerProcess']);
Route::get('/logout', [AuthController::class, 'logout']);

// DASHBOARD
Route::get('/admin', [MenuController::class, 'dashboardIndex']);
Route::get('/admin/{product}/invoice', [MenuController::class, 'produtInvoice']);

Route::get('/admin/category', [MenuController::class, 'productCategory']);
Route::get('/admin/product', [MenuController::class, 'productIndex']);
Route::get('/admin/product/tambah', [MenuController::class, 'productTambah']);
Route::get('/admin/product/{slug}/detail', [MenuController::class, 'productDetail']);

Route::get('/admin/order', [MenuController::class, 'orderIndex']);
Route::get('/admin/order/{order}/detail', [MenuController::class, 'orderDetail']);

Route::get('/admin/customer', action: [MenuController::class, 'costumerIndex']);