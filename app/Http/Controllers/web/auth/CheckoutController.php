<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutStoreRequest;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\VariantAttribute;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        return
            Cart::instance('cart')->content()->count()
            ? view('web.checkout.index')
            : redirect()->route('web.index');
    }

    public function store(CheckoutStoreRequest $request)
    {
        foreach (Cart::instance('cart')->content() as $c) {
            foreach ($c->options['variants'] as $v) {
                if (VariantAttribute::whereHash($v->hash)->where('stock', '<', $c->qty)->count()) {
                    return response()->json([
                        'status' => 201,
                        'message' => __('words.product_not_have_stock', ['qty' => $c->qty])
                    ]);
                } else {
                    VariantAttribute::whereHash($v->hash)->decrement('stock', $c->qty);
                }
            }
        }
        DB::transaction(function () use ($request) {
            $total = Session::get('coupon')
                ? getCheckoutMoneyOrder(Cart::instance('cart')->subtotal()) - Session::get('coupon')['price']
                : getCheckoutMoneyOrder(Cart::instance('cart')->subtotal()) - 0;
            $coupon = Session::get('coupon')
                ? Session::get('coupon')['code']
                : null;
            if (Session::get('coupon')) {
                Coupon::whereCode(Session::get('coupon')['code'])->where('usage', '>', 0)->decrement('usage', 1);
            }
            $order = Order::create([
                'hash' => Str::random(15),
                'user_id' => Auth::user()->id,
                'phone' => $request->phone,
                'adress' => $request->adress,
                'coupon' => $coupon,
                'total' => $total
            ]);
            foreach (Cart::instance('cart')->content() as $c) {
                $order->getAllOrderAttributes()->create([
                    'hash' => Str::random(15),
                    'product' => $c->name,
                    'price' => getCheckoutMoneyOrder($c->price),
                    'quantity' => $c->qty,
                    'total' => getCheckoutMoneyOrder($c->price) * $c->qty,
                    'variants' => $c->options['variants'],
                ]);
            }
        });
        return response()->json([
            'status' => 200,
        ]);
    }
}
