<?php

namespace App\Http\Controllers\web\auth;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\OAuthFacebookRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class OAuthFacebookController extends Controller
{
    const DRIVER_TYPE = 'facebook';

    public function index(){
        return Socialite::driver(static::DRIVER_TYPE)->redirect();
    }

    public function store(OAuthFacebookRequest $request){
        $s = Socialite::driver(static::DRIVER_TYPE)->user();
        $u = User::where('oauth_id', $s->id)->where('oauth_type', static::DRIVER_TYPE)->first();
        if($u) {
            Auth::login($u);
            $request->session()->flash('success', __('words.login_action_success'));
            return redirect()->route('web.account.index');
        }else {
            $n = User::create([
                'name' => Helper::name($s->name),
                'surname'=>Helper::surname($s->name),
                'email' => $s->email,
                'oauth_id' => $s->id,
                'oauth_type' => static::DRIVER_TYPE,
                'password' => Hash::make(Str::random(15))
            ]);
            $n->assignRole('member');
            Auth::login($n);
            $request->session()->flash('success', __('words.login_action_success'));
            return redirect()->route('web.account.index');
        }
    }
}