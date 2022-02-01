<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-page');
Route::view('product/detail', 'products.show');
Route::view('cart', 'products.cart');
Route::view('check-out', 'products.checkout');
Route::view('confirmation', 'transactions.checkout-confirmation');
