<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class AccountReviewController extends Controller
{
    public function destroy(Request $request)
    {
        ProductReview::whereHash($request->hash)->delete();
        return response()->json([
            'message' => __('words.deleted_action_success')
        ]);
    }
}
