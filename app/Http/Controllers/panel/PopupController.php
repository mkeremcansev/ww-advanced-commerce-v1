<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PopupUpdateRequest;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function update(PopupUpdateRequest $request){
        if($request->hasFile('popup')){
            setting(['popup'=>Helper::imageUpload($request->popup, 'storage')])->save();
        }
        return back()->with('success', __('words.updated_action_success'));
    }
}
