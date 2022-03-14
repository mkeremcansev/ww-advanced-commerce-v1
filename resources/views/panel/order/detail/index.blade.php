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
                    @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="pt-1 pb-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
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
                                    <select class="select2 form-control" onchange="orderStatus({{ $order->id }}, this.value)">
                                        @foreach (orderStatusData($order->status) as $key => $s)
                                            <option value="{{ $s['value'] }}" @if($s['status']) selected @endif>{{ $s['text'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card">
                                <form method="POST" action="{{ route('panel.order.cargo.update', $order->id) }}">
                                    @csrf
                                    <div class="card-body">
                                        <h4 class="text-center">@lang('words.cargo_informations')</h4>
                                        <div class="form-group">
                                            <label>@lang('words.cargo_company')</label>
                                            <select class="select2 form-control" name="cargo_id">
                                                @foreach ($cargos as $c)
                                                    <option @if($order->cargo_id == $c->id) selected @endif value="{{ $c->id }}">{{ $c->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">@lang('words.cargo_code')</label>
                                            <input type="text" class="form-control" name="cargo_code" value="{{ $order->cargo_code }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
