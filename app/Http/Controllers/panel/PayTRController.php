<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\PayTRUpdateRequest;
use Illuminate\Http\Request;

class PayTRController extends Controller
{
    public function update(PayTRUpdateRequest $request){
        setting($request->validated())->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
