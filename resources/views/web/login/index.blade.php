@extends('web.layouts.extends')
@section('title', __('words.login'))
@include('web.login.script.script')
@section('content')
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-5">
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>@lang('words.welcome')</h2>
                            <p>@lang('words.welcome_text')</p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="@lang('words.email_adress')"></div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="@lang('words.password')"></div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                    <label class="form-check-label" for="check">@lang('words.remember_me')</label>
                                </div>
                                <div class="form-button">
                                    <button type="button" id="add-to-login">@lang('words.login')</button>
                                    <p>
                                        @lang('words.forgot_your_password')
                                        <a href="{{ route('web.forgot.password.index') }}">@lang('words.forgot_password')</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>@lang('words.dont_have_account')<a href="{{ route('web.user.register.index') }}">@lang('words.register')</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection