@extends('panel.layouts.extends')
@section('title')
    @lang('words.order_detail')
@endsection
@include('panel.order.script.script')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <div class="col-xl-8 col-md-8 col-12">
                            <div class="card invoice-preview-card">
                                <div class="card-body invoice-padding pb-0">
                                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                        <div>
                                            <div class="logo-wrapper">
                                                <img src="{{ asset(setting('logo')) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="mt-md-0 mt-2">
                                            <h4 class="invoice-title">@lang('words.order_number', ['number'=>$order->id])</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-xl-8 p-0">
                                            <h6 class="mb-25">{{ setting('title') }}</h6>
                                            <p class="card-text mb-25">{{ setting('adress') }}</p>
                                            <p class="card-text mb-0">{{ setting('phone') }}</p>
                                        </div>
                                        <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                            <h6 class="mb-25">@lang('words.name_surname', ['name'=>$order->getOneUsers->name, 'surname'=>$order->getOneUsers->surname])</h6>
                                            <p class="card-text mb-25">{{ $order->adress }}</p>
                                            <p class="card-text mb-25">{{ $order->phone }}</p>
                                            <p class="card-text mb-0">{{ $order->getOneUsers->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address and Contact ends -->

                                <!-- Invoice Description starts -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="py-1">@lang('words.product_name')</th>
                                                <th class="py-1">@lang('words.variation')</th>
                                                <th class="py-1">@lang('words.quantity')</th>
                                                <th class="py-1">@lang('words.price')</th>
                                                <th class="py-1">@lang('words.total_price')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->getAllOrderAttributes as $a)
                                                <tr class="@if($loop->last) border-bottom @endif">
                                                    <td class="py-1">
                                                        <p class="card-text text-nowrap">{{ $a->product }}</p>
                                                    </td>
                                                    <td class="py-1">
                                                        @foreach ($a->variants as $v)
                                                        <p class="card-text text-nowrap">{{ $v->title }}</p>
                                                        @endforeach
                                                    </td>
                                                    <td class="py-1">
                                                        <span class="font-weight-bold">{{ $a->quantity }}</span>
                                                    </td>
                                                    <td class="py-1">
                                                        <span class="font-weight-bold">{{ getMoneyOrder($a->price) }}</span>
                                                    </td>
                                                    <td class="py-1">
                                                        <span class="font-weight-bold">{{ getMoneyOrder($a->total) }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center">@lang('words.total_price')</h4>
                                    <p class="text-center">{{ getMoneyOrder($order->total) }}</p>
                                    <select class="form-control" onchange="orderStatus({{ $order->id }}, this.value)">
                                        <option value="0" @if($order->status == 0) selected @endif>@lang('words.order_saved')</option>
                                        <option value="1" @if($order->status == 1) selected @endif>@lang('words.order_prepared')</option>
                                        <option value="2" @if($order->status == 2) selected @endif>@lang('words.order_shepped')</option>
                                        <option value="3" @if($order->status == 3) selected @endif>@lang('words.order_delivered')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
