<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentMethodUpdateRequest;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $methods = PaymentMethod::get();
        return view('panel.method.index', ['methods'=>$methods]);
    }

    public function update(PaymentMethodUpdateRequest $request, $id)
    {
        PaymentMethod::findOrFail($id)->update([
            'price'=>$request->price,
            'status'=>$request->status ? 1 : 0
        ]);
        return back()->with('success', __('words.updated_action_success'));
    }

    public function edit($id)
    {
        $method = PaymentMethod::findOrFail($id);
        return view('panel.method.update.index', ['method'=>$method]);
    }
}
