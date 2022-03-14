<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function update(Request $request){
        $request->validate([
            'right'=>'nullable|mimes:png,jpg,jpeg,gif',
            'left'=>'nullable|mimes:png,jpg,jpeg,gif'
        ]);
        $banner = [];
        if($request->hasFile('right')){
            $banner['right'] = Helper::imageUpload($request->right, 'storage');
        }
        if($request->hasFile('left')){
            $banner['left'] = Helper::imageUpload($request->left, 'storage');
        }
        setting($banner)->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
