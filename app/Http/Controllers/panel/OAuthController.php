<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\OAuthUpdateRequest;
use Illuminate\Http\Request;

class OAuthController extends Controller
{
    public function update(OAuthUpdateRequest $request){
        setting($request->validated())->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
