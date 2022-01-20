<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(UserRegisterStoreRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->assignRole('member');
        return response()->json([
            'message' => __('words.register_action_success'),
        ]);
    }
}
