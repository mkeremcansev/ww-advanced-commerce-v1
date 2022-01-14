<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountPhoneStoreRequest;
use App\Models\UserAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AccountPhoneController extends Controller
{
    public function store(AccountPhoneStoreRequest $request)
    {
        UserAttribute::create([
            'title' => $request->phone,
            'hash' => Str::random(15),
            'type' => 1,
            'user_id' => Auth::user()->id
        ]);
        return response()->json([
            'message' => __('words.added_action_success')
        ]);
    }
}
