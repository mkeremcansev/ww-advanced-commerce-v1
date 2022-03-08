<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayTRController extends Controller
{
    public function update(Request $request){
        $request->validate([
            'paytr_merchant_id'=>'required',
            'paytr_merchant_key'=>'required',
            'paytr_merchant_salt'=>'required'
        ]);
        setting([
            'paytr_merchant_id'=>$request->paytr_merchant_id,
            'paytr_merchant_key'=>$request->paytr_merchant_key,
            'paytr_merchant_salt'=>$request->paytr_merchant_salt
        ])->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
