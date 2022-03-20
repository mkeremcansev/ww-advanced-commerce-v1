<?php

namespace App\Http\Controllers\panel;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function update(SettingUpdateRequest $request)
    {
        $settings = [
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'adress' => $request->adress,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'oauth'=>$request->oauth ? 1 : 0,
            'verification'=>$request->verification ? 1 : 0,
            'whatsapp_info'=>$request->whatsapp_info ? 1 : 0,
        ];
        if ($request->hasFile('logo')) {
            $settings['logo'] = Helper::imageUpload($request->file('logo'), 'storage');
        }
        if ($request->hasFile('favicon')) {
            $settings['favicon'] = Helper::imageUpload($request->file('favicon'), 'storage');
        }
        setting($settings)->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
