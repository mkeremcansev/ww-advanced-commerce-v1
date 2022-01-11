<?php

use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\web\ShoppingCartController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::name('web.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
    Route::post('/shopping/cart/store', [ShoppingCartController::class, 'store'])->name('shopping.cart.store');
    Route::post('/shopping/cart/update', [ShoppingCartController::class, 'update'])->name('shopping.cart.update');
    Route::get('/shopping/cart/delete/{rowId}', [ShoppingCartController::class, 'delete'])->name('shopping.cart.delete');
    Route::get('/shopping/cart/destroy', [ShoppingCartController::class, 'destroy'])->name('shopping.cart.destroy');
});
