<?php

namespace App\Http\Controllers\web\auth;

use App\Helper\Paytr;
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
    public $token;

    public function index()
    {
        return
            Cart::instance('cart')->content()->count()
            ? view('web.checkout.index')
            : redirect()->route('web.index');
    }

    public function store(CheckoutStoreRequest $request)
    {
        DB::beginTransaction();
            foreach (Cart::instance('cart')->content() as $c) {
                foreach($c->options['variants'] as $v){
                    $variant = VariantAttribute::whereHash($v->hash)->first();
                    if($variant->stock < $c->qty){
                        DB::rollBack();
                        return response()->json([
                            'status' => 201,
                            'message' => __('words.product_not_have_stock', ['qty' => $c->qty, 'variant'=>$variant->title, 'product'=>$variant->getOneVariantMain->getOneProductAttributes->title])
                        ]);
                    }
                    $variant->decrement('stock', $c->qty);
                }
            }
        DB::commit();
        $coupon = null;
        if (Session::has('coupon')) {
            $coupon = Coupon::whereCode(Session::get('coupon')['code'])->where('usage', '>', 0)->first();
            if (!$coupon) {
                Session::forget('coupon');
                return response()->json([
                    'status' => 202,
                    'message' => __('words.not_have_coupon_usage'),
                ]);
            }
        }
        DB::transaction(function () use ($request, $coupon) {
            $subtotal = getCheckoutMoneyOrder(Cart::instance('cart')->subtotal());
            $total = $coupon
                ? $subtotal - $coupon->price
                :  $subtotal - 0;
            $code = $coupon
                ? $coupon->code
                : null;
            $order = Order::create([
                'hash' => Str::random(15),
                'user_id' => Auth::user()->id,
                'phone' => $request->phone,
                'adress' => $request->adress,
                'coupon' => $code,
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
            $coupon ? $coupon->decrement('usage', 1) : null;
            $this->token = Paytr::create($order->total, $order->id, $order->adress, $order->phone);
        });
        Session::forget('coupon');
        Cart::instance('cart')->destroy();
        Session::flash('payment_token', $this->token);
        return response()->json([
            'status' => 200
        ]);
    }

    public function update(Request $request){
        Paytr::update($request);
    }
}
