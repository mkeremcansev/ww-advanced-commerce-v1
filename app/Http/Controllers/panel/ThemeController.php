<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThemeUpdateRequest;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function update(ThemeUpdateRequest $request)
    {
        setting($request->validated())->save();
        return back()->with('success', __('words.updated_action_success'));
    }
}
