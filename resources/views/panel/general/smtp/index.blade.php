@extends('panel.layouts.extends')
@section('title')
@lang('words.smtp')
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
                                <h4 class="card-title">@lang('words.smtp')</h4>
                            </div>
                            <form id="setting_form" method="POST" action="{{ route('panel.smtp.update') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.smtp_username')</label>
                                                <input type="text" class="form-control" name="smtp_username" value="{{ setting('smtp_username') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.smtp_password')</label>
                                                <input type="password" class="form-control" name="smtp_password" value="{{ setting('smtp_password') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.smtp_host')</label>
                                                <input type="text" class="form-control" name="smtp_host" value="{{ setting('smtp_host') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.smtp_port')</label>
                                                <input type="text" class="form-control" name="smtp_port" value="{{ setting('smtp_port') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="title">@lang('words.smtp_from')</label>
                                                <input type="text" class="form-control" name="smtp_from" value="{{ setting('smtp_from') }}">
                                            </div>
                                        </div>
                                        
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