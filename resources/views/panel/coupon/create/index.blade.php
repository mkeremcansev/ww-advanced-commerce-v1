@extends('panel.layouts.extends')
@section('title')
@lang('words.coupon_create')
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
                                <h4 class="card-title">@lang('words.coupon_create')</h4>
                            </div>
                            <form method="POST" action="{{ route('panel.coupon.store') }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="title">@lang('words.coupon_code_1')</label>
                                        <input type="text" class="form-control" name="code">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">@lang('words.price')</label>
                                        <input type="text" class="form-control" name="price">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">@lang('words.usage_count')</label>
                                        <input type="text" class="form-control" name="usage">
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