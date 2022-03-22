@extends('web.layouts.extends')
@section('title', __('words.my_orders'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@section('content')
<section class="inner-section orderlist-part">
        <div class="container">
            <div class="row">
                @if (Auth::user()->getAllUserOrders->count())
                    <div class="col-lg-12">
                        <h1>{{ Session::get('payment_token') }}</h1>
                        @foreach (Auth::user()->getAllUserOrders as $o)
                        <div class="orderlist">
                            <div class="orderlist-head">
                                <h5>@lang('words.order_number', ['number'=>$o->id])</h5>
                            </div>
                            <div class="orderlist-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="order-track">
                                            <ul class="order-track-list">
                                                @foreach (orderAccountStatus($o->status) as $s)
                                                    <li class="order-track-item @if($s['status']) active @endif">
                                                        <i class="icofont-check"></i>
                                                        <span>{{ $s['text'] }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <ul class="orderlist-details">
                                            <li>
                                                <h6>@lang('words.order_number_1')</h6>
                                                <p>{{ $o->id }}</p>
                                            </li>
                                            <li>
                                                <h6>@lang('words.total_price')</h6>
                                                <p>{{ getMoneyOrder($o->total) }}</p>
                                            </li>
                                            <li>
                                                <h6>@lang('words.order_date')</h6>
                                                <p>{{ $o->created_at->format('d.m.Y') }}</p>
                                            </li>
                                            <li>
                                                <h6>@lang('words.order_adress')</h6>
                                                <p>{{ $o->adress }}</p>
                                            </li>
                                            <li>
                                                <h6>@lang('words.order_phone')</h6>
                                                <p>{{ $o->phone }}</p>
                                            </li>
                                            @if ($o->cargo_code)
                                                <li>
                                                    <h6>@lang('words.cargo_tracking')</h6>
                                                    <a target="_blank" href="{{ orderCargoWhere($o->getOrderCargos->url, $o->cargo_code) }}"><p>@lang('words.where_is_my_cargo')</p></a>
                                                </li>
                                            @endif
                                            
                                        </ul>
                                    </div>
                                    @foreach ($o->getAllOrderAttributes as $a)
                                        <div class="col-lg-6">
                                            <ul class="orderlist-details">
                                                <li>
                                                    <h6>@lang('words.product_name')</h6>
                                                    <p>{{ $a->product }}</p>
                                                </li>
                                                <li>
                                                    <h6>@lang('words.quantity')</h6>
                                                    <p>{{ $a->quantity }}</p>
                                                </li>
                                                <li>
                                                    <h6>@lang('words.price')</h6>
                                                    <p>{{ getMoneyOrder($a->price) }}</p>
                                                </li>
                                                <li>
                                                    <h6>@lang('words.total_price')</h6>
                                                    <p>{{ getMoneyOrder($a->total) }}</p>
                                                </li>
                                                @foreach ($a->variants as $v)
                                                    <li>
                                                        <h6>{{ $v->get_one_variant_main->title }}</h6>
                                                        <p>{{ $v->title }}</p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="col-lg-12">
                        <div class="product-card pb-5 pt-5 mt-5">
                            <h5 class="text-center">@lang('words.not_have_your_order')</h5>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </section>
@endsection