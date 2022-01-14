<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountAttributeDestroyRequest;
use App\Models\UserAttribute;
use Illuminate\Http\Request;

class AccountAttributeController extends Controller
{
    public function destroy(AccountAttributeDestroyRequest $request)
    {
        UserAttribute::whereHash($request->hash)->delete();
        return response()->json([
            'message' => __('words.deleted_action_success')
        ]);
    }
}
