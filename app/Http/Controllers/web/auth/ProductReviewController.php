<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductReviewCreateRequest;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    public function store(ProductReviewCreateRequest $request)
    {
        $product = Product::whereHash($request->product)->first();
        $review = ProductReview::where('user_id', Auth::user()->id)->where('product_id', $product->id)->count();
        if ($review) {
            return response()->json([
                'status' => 'error',
                'message' => __('words.have_a_user_review')
            ]);
        } else {
            ProductReview::create([
                'content' => $request->content,
                'rating' => $request->rating,
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => __('words.review_created_success')
            ]);
        }
    }
}
