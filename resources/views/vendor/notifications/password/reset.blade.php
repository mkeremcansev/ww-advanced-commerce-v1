@extends('web.layouts.extends')
@section('title')
    qweqwewqewqq
@endsection
@section('content')
 <section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>worried?</h2>
                        <p>No Problem! Just Follow The Simple Way</p>
                    </div>
                    <form class="user-form" method="POST" action="{{ route('web.forgot.password.update', ['token'=>$token]) }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="@lang('words.email_adress')">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="@lang('words.password')">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="@lang('words.repeat_password')">
                        </div>
                        <div class="form-button"><button type="submit">@lang('words.save')</button></div>
                    </form>
                </div>
                <div class="user-form-remind">
                    <p>Go Back To<a href="login.html">login here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection