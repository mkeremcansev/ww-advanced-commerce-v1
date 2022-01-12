<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(UserRegisterCreateRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->assignRole('user');
        return response()->json([
            'message' => __('words.register_action_success'),
        ]);
    }
}
