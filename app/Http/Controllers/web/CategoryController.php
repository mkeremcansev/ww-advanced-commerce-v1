<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        $products = Product::with(['getOneProductAttributes', 'getOneProductImages', 'getAllProductReviews'])
        ->whereStatus(1)
        ->where('category_id', $category->id)
        ->paginate(15);
        return view('web.products.category.index', ['products' => $products, 'category'=>$category]);
    }
}
