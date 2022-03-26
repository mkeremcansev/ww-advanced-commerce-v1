<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountAdressStoreRequest;
use App\Models\UserAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AccountAdressController extends Controller
{
    public function store(AccountAdressStoreRequest $request)
    {
        UserAttribute::create([
            'title' => $request->adress,
            'hash' => Str::random(15),
            'type' => 2,
            'user_id' => Auth::user()->id
        ]);
        Log::info(__('words.new_user_update', ['action'=>__('words.adress'), 'email'=>Auth::user()->email]));
        return response()->json([
            'message' => __('words.added_action_success')
        ]);
    }
}
