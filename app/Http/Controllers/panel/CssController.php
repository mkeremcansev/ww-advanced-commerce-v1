<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CssController extends Controller
{
    public function update(Request $request){
        setting([
            'css'=>$request->css
        ])->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
