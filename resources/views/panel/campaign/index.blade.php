@extends('panel.layouts.extends')
@section('title')
    @lang('words.campaign_list')
@endsection
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
                                    <h4 class="card-title">@lang('words.campaign_list')</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>@lang('words.image')</th>
                                                <th>@lang('words.campaign_name')</th>
                                                <th>@lang('words.product_count')</th>
                                                <th>@lang('words.status')</th>
                                                <th>@lang('words.actions')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($campaigns as $c)
                                                <tr>
                                                    <td></td>
                                                    <td><img width="100" src="{{ asset($c->image) }}" alt=""></td>
                                                    <td>{{ $c->title }}</td>
                                                     <td><span class="text-primary">@lang('words.product_count_text', ['count'=>$c->getAllCampaignAttributes->count()])</span></td>
                                                    <td>
                                                        @if ($c->status)
                                                            <span class="text-success">@lang('words.active')</span>
                                                        @else
                                                            <span class="text-danger">@lang('words.passive')</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="{{ route('panel.campaign.edit', $c->id) }}">@lang('words.edit')</a>
                                                                <form action="{{ route('panel.campaign.destroy', $c->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="dropdown-item text-danger w-100" href="">@lang('words.delete')</button>
                                                                </form>
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
