@extends('web.layouts.extends')
@section('title')
    @lang('words.verify_your_email_adress')
@endsection
@section('content')
       <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-5">
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>@lang('words.hello_name', ['name'=>Auth::user()->name])</h2>
                            <p>@lang('words.account_verify_text')</p>
                        </div>
                     
                       <a class="checkout-and-go-btn text-center" href="{{ route('verification.send') }}">
                            @lang('words.verify_your_email_adress')
                        </a>
                           
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection