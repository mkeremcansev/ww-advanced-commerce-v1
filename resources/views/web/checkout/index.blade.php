@extends('web.layouts.extends')
@section('title', 'odeme la askldas')
@include('web.checkout.script.script')
@section('content')
<section class="inner-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="product-details-frame">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">@lang('words.adress')</label>
                                <select class="form-select" id="adress">
                                    @foreach (Auth::user()->getAllUserAttributeAdresses as $a)
                                        <option value="{{ $a->title }}">{{ $a->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">@lang('words.phone_number')</label>
                                <select class="form-select" id="phone">
                                    @foreach (Auth::user()->getAllUserAttributePhones as $p)
                                        <option value="{{ $p->title }}">{{ $p->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="coupon" placeholder="@lang('words.discount_coupon')">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="details-action-group">
                                        <a class="details-wish wish custom-cursor-pointer" id="go-to-coupon">
                                            <i class="icofont-arrow-left"></i>
                                            <span>@lang('words.coupon_save')</span>
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        <div class="details-action-group mt-4">
                            <a class="details-wish wish w-100 custom-cursor-pointer" id="go-to-payment">
                                <i class="icofont-arrow-right"></i>
                                <span>@lang('words.go_to_payment', ['price'=>getMoneyOrderShoppingCart(Cart::subtotal())])</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection