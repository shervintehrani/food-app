<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;


// Show menu page
Route::get('/', [MenuController::class, 'index']);


// Add item to cart
Route::post('/add', [OrderController::class, 'add']);


// Show cart
Route::get('/cart', [OrderController::class, 'cart']);


// Checkout and save order
Route::post('/checkout', [OrderController::class, 'checkout']);
