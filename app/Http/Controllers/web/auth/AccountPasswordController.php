<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountPasswordUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountPasswordController extends Controller
{
    public function update(AccountPasswordUpdateRequest $request)
    {
        Auth::user()->update([
            'password' => Hash::make($request->password)
        ]);
        return response()->json([
            'message' => __('words.updated_action_success'),
        ]);
    }
}
