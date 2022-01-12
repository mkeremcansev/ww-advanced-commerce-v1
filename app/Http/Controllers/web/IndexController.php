<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $r_categories = Category::with('getAllCategoryProducts')->inRandomOrder()->get();
        $r_products = Product::with('getOneProductAttributes', 'getOneProductImages', 'getAllProductReviews')->inRandomOrder()->limit(10)->get();
        // $p_products = Product::with('getOneProductAttributes', 'getAllProductReviews')->whereHas('getAllProductReviews', function ($q) {
        //     $q->whereStatus(1);
        // })->get();
        return view(
            'web.homepage.index',
            [
                'r_categories' => $r_categories,
                'r_products' => $r_products
            ]
        );
    }
}
