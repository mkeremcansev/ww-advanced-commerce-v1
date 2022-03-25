@extends('web.layouts.extends')
@section('title', __('words.go_to_payment_title'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@section('content')
<section class="inner-section offer-part">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($methods as $m)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="offer-card">
                        <a class="text-center" href="{{ route($m->route) }}">
                            <i class="{{ $m->icon }} mb-2 payment-last-icon"></i>
                        </a>
                        <div class="offer-div">
                            <a href="{{ route($m->route) }}"><h5 class="offer-code text-center">{{ $m->title }}@if($m->price) @lang('words.plus_price', ['price'=>getMoneyOrder($m->price)]) @endif</h5></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection