<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(UserLoginCreateRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return response()->json([
                'status' => 'success',
                'message' => __('words.login_action_success')
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => __('words.login_action_error')
            ]);
        }
    }
}
