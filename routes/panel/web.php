<?php

use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\ProductController;
use App\Http\Controllers\panel\ProductImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->name('panel.')->group(function () {
    Route::view('/', 'panel.homepage.index')->name('index');
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::get('/product/image/delete/{id}', [ProductImageController::class, 'destroy'])->name('product.image.destroy');
});
