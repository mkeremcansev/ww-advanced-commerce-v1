@extends('web.layouts.extends')
@section('title', __('words.register'))
@include('web.register.script.script')
@section('content')
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-5">
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>@lang('words.join_now')</h2>
                            <p>@lang('words.join_now_text')</p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="@lang('words.name')" id="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="@lang('words.surname')" id="surname">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="@lang('words.email_adress')" id="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="@lang('words.password')" id="password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="@lang('words.repeat_password')" id="repeat">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="check">
                                    <label class="form-check-label" for="check">
                                        @lang('words.accept_all_contracts')
                                    </label>
                                </div>
                                <div class="form-button">
                                    <button type="button" id="add-to-register">@lang('words.register')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>@lang('words.already_have_an_account')<a href="{{ route('web.user.login.index') }}">@lang('words.login')</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection