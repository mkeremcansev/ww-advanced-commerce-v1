<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutStoreRequest;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        DB::transaction(function () use ($request) {
            $order = Order::create([
                'hash' => Str::random(15),
                'user_id' => Auth::user()->id,
                'phone' => $request->phone,
                'adress' => $request->adress,
                'total' => getCheckoutMoneyOrder(Cart::instance('cart')->subtotal())
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
        return response()->json(200);
    }
}
