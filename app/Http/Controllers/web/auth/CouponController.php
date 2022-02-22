<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutCouponStoreRequest;
use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function store(CheckoutCouponStoreRequest $request)
    {
        $coupon = Coupon::where('usage', '>', 0)
            ->whereStatus(1)
            ->whereCode($request->code)
            ->first();
        if (!$coupon || Session::get('coupon') || getCheckoutMoneyOrder(Cart::instance('cart')->total()) < $coupon->price) {
            return response()->json([
                'status' => 201,
                'message' => __('words.coupon_code_added_action_error')
            ]);
        }
        $request->session()->put('coupon', [
            'code' => $coupon->code,
            'price' => $coupon->price,
        ]);
        return response()->json([
            'status' => 200,
            'message' => __('words.coupon_code_added_action_success')
        ]);
    }
}