<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\CSSUpdateRequest;
use Illuminate\Http\Request;

class CssController extends Controller
{
    public function update(CSSUpdateRequest $request){
        setting($request->validated())->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
