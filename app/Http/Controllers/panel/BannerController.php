<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerUpdateRequest;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function update(BannerUpdateRequest $request){
        $banner = [
            'right_status'=>$request->right_status ? true : false,
            'left_status'=>$request->left_status ? true : false,
        ];
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
