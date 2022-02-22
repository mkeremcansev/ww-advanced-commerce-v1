@extends('panel.layouts.extends')
@section('title')
    @lang('words.order_list')
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
                <section id="responsive-datatable">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">@lang('words.order_list')</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>@lang('words.order_number_1')</th>
                                                <th>@lang('words.total_price')</th>
                                                <th>@lang('words.user')</th>
                                                <th>@lang('words.order_adress')</th>
                                                <th>@lang('words.order_phone')</th>
                                                <th>@lang('words.status')</th>
                                                <th>@lang('words.actions')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $o)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $o->id }}</td>
                                                    <td>{{ getMoneyOrder($o->total) }}</td>
                                                    <td>@lang('words.name_surname', ['name'=>$o->getOneUsers->name, 'surname'=>$o->getOneUsers->surname])</td>
                                                    <td>{{ $o->adress }}</td>
                                                    <td>{{ $o->phone }}</td>
                                                    <td>
                                                            <select class="form-control" onchange="orderStatus({{ $o->id }}, this.value)">
                                                                <option value="1" @if($o->status == 1) selected @endif>@lang('words.order_saved')</option>
                                                                <option value="2" @if($o->status == 2) selected @endif>@lang('words.order_prepared')</option>
                                                                <option value="3" @if($o->status == 3) selected @endif>@lang('words.order_shepped')</option>
                                                                <option value="4" @if($o->status == 4) selected @endif>@lang('words.order_delivered')</option>
                                                            </select>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="{{ route('panel.order.show', $o->id) }}">@lang('words.detail')</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
