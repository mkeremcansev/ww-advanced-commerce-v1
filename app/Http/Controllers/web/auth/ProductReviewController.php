<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductReviewStoreRequest;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductReviewController extends Controller
{
    public function store(ProductReviewStoreRequest $request)
    {
        $product = Product::whereHash($request->product)->firstOrFail();
        $review = ProductReview::where('user_id', Auth::user()->id)->where('product_id', $product->id)->count();
        if ($review) {
            return response()->json([
                'status' => 'error',
                'message' => __('words.have_a_user_review')
            ]);
        } else {
            $product->getAllProductReviews()->create([
                'content' => $request->content,
                'hash' => Str::random(15),
                'rating' => $request->rating,
                'user_id' => Auth::user()->id,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => __('words.review_created_success')
            ]);
        }
    }
}
