@extends('panel.layouts.extends')
@section('title')
@lang('words.banner')
@endsection
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section>
                <div class="row justify-content-center">
                    <div class="col-md-6">
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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">@lang('words.banner')</h4>
                            </div>
                            <form method="POST" action="{{ route('panel.banner.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="logo">@lang('words.right_banner')</label>
                                                <input type="file" class="form-control" name="right">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="favicon">@lang('words.left_banner')</label>
                                                <input type="file" class="form-control" name="left">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <h4 class="card-title">@lang('words.right_banner')</h4>
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset(setting('right')) }}"
                                                class="img-fluid rounded mb-1 w-50" />
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <h4 class="card-title">@lang('words.left_banner')</h4>
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset(setting('left')) }}"
                                                class="img-fluid rounded mb-1 w-50" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection