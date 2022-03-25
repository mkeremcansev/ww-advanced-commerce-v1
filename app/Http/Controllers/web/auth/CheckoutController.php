<?php

namespace App\Http\Controllers\web\auth;

use App\Helper\Paytr;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutStoreRequest;
use App\Http\Requests\CheckoutUpdateRequest;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\PaymentMethod;
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
        $method = Session::get('payment_method_id') ? PaymentMethod::findOrFail(Session::get('payment_method_id')) : null;
        return
            Cart::instance('cart')->content()->count() && Session::has('payment_method_id') 
            ? view('web.checkout.index', ['method'=>$method])
            : redirect()->route('web.index');
    }

    public function store(CheckoutStoreRequest $request)
    {
        if(Cart::instance('cart')->subtotal() <= 0 && !Session::has('payment_method_id')){
            return response()->json([
                'status'=>203,
                'message'=>__('words.payment_error_203')
            ]);
        }
        if(Session::get('payment_method_id') == 1){
            DB::beginTransaction();
            foreach (Cart::instance('cart')->content() as $c) {
                foreach($c->options['variants'] as $v){
                    $variant = VariantAttribute::whereHash($v->hash)->first();
                    if($variant->stock < $c->qty){
                        DB::rollBack();
                        return response()->json([
                            'status' => 201,
                            'message' => __('words.product_not_have_stock', ['qty' => $variant->stock, 'variant'=>$variant->title, 'product'=>$variant->getOneVariantMain->getOneProductAttributes->title])
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
                    'total' => $total,
                    'payment_method_id'=>Session::get('payment_method_id')
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
            Session::forget('payment_method_id');
            Cart::instance('cart')->destroy();
            Session::flash('payment_token', $this->token);
            return response()->json([
                'status' => 200
            ]);
        } else if(Session::get('payment_method_id') == 2) {
            DB::beginTransaction();
            foreach (Cart::instance('cart')->content() as $c) {
                foreach($c->options['variants'] as $v){
                    $variant = VariantAttribute::whereHash($v->hash)->first();
                    if($variant->stock < $c->qty){
                        DB::rollBack();
                        return response()->json([
                            'status' => 201,
                            'message' => __('words.product_not_have_stock', ['qty' => $variant->stock, 'variant'=>$variant->title, 'product'=>$variant->getOneVariantMain->getOneProductAttributes->title])
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
                $subtotal = getCheckoutMoneyOrder(Cart::instance('cart')->subtotal()) + PaymentMethod::findOrFail(Session::get('payment_method_id'))->price;
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
                    'total' => $total,
                    'payment_method_id'=>Session::get('payment_method_id'),
                    'status'=>1,
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
            });
            Session::forget('coupon');
            Session::forget('payment_method_id');
            Cart::instance('cart')->destroy();
            return response()->json([
                'status' => 205
            ]);
        } else {
            return response()->json([
                'status'=>203,
                'message'=>__('words.payment_error_203')
            ]);
        }
    }

    public function update(CheckoutUpdateRequest $request){
        Paytr::update($request);
    }
}
