<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentMethodController extends Controller
{
    public function index(){
        $methods = PaymentMethod::whereStatus(1)->get();
        return view('web.checkout.method.index', ['methods'=>$methods]);
    }

    public function credit(){
        Session::put('payment_method_id', 1);
        return redirect()->route('web.checkout.index');
    }

    public function door(){
        Session::put('payment_method_id', 2);
        return redirect()->route('web.checkout.index');
    }
}
