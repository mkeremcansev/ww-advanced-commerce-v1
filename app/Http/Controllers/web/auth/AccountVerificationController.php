<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class AccountVerificationController extends Controller
{
    public function store()
    {
        Auth::user()->sendEmailVerificationNotification();
        return back()->with('success', __('words.verify_code_send_success'));
    }

    public function call(EmailVerificationRequest $request)
    {
        $request->fulfill();
        $request->session()->flash('success', __('words.verify_success_message'));
        return redirect()->route('web.account.index');
    }
}
