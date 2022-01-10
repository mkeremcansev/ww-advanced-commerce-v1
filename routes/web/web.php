<?php

use App\Http\Controllers\web\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'web.homepage.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('web.product.show');
