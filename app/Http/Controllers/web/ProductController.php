<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::whereStatus(1)->with([
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
        return view('web.product.index', ['product' => $product]);
    }
}
