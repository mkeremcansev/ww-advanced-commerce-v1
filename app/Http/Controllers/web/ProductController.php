<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::with([
            'getOneProductAttributes',
            'getAllProductImages',
            'getAllProductInformations',
            'getAllProductVariants.getAllVariantAttributes',
            'getOneProductBrand'
        ])->whereHas('getOneProductAttributes', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->first();
        return view('web.product.index', compact('product'));
    }
}
