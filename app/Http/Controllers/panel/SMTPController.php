<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\SMTPUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SMTPController extends Controller
{
    public function update(SMTPUpdateRequest $request){
        setting($request->validated())->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
