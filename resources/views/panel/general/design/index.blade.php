@extends('panel.layouts.extends')
@section('title')
    @lang('words.homepage_design_edit')
@endsection
@include('panel.general.design.script.script')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/plugins/extensions/ext-component-drag-drop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel') }}/app-assets/vendors/css/extensions/dragula.min.css">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dd-with-handle">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">@lang('words.homepage_design')</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="list-group" id="handle-list-2">
                                                @foreach (setting('design') as $d)
                                                    <li class="list-group-item" data-design="{{ $d['title'] }}" data-number="{{ $d['number'] }}"><span class="handle mr-50">+</span>@lang('words.'.$d["title"].'')</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" id="design_btn" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
