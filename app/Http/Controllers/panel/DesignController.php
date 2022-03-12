<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\DesignUpdateRequest;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function update(DesignUpdateRequest $request){
        setting($request->validated())->save();
        $request->session()->flash('success', __('words.updated_action_success'));
        return response()->json('success');
    }
}
