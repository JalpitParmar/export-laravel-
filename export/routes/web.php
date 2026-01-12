<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/category/{category}', [ProductController::class, 'index'])
    ->name('products.category');
Route::get('/', [HomeController::class, 'index'])->name('home');