<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function store(UserLoginStoreRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            Log::info(__('words.new_login', ['email'=>$request->email]));
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
