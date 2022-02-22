<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function index(){
        return Session::has('payment_token') 
        ? view('web.checkout.payment.index')
        : redirect()->route('web.index');
    }
}
