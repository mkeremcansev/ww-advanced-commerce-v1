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
            'getOneProductBrand',
            'getOneProductCategory',
            'getAllProductReviews.getOneReviewUser'
        ])->whereHas('getOneProductAttributes', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->first();
        $prev = Product::with('getOneProductAttributes', 'getOneProductImages')->where('id', '<', $product->id)->first();
        $next = Product::with('getOneProductAttributes', 'getOneProductImages')->where('id', '>', $product->id)->first();
        return view('web.product.index', ['product' => $product, 'prev' => $prev, 'next' => $next]);
    }
}
