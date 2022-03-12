@extends('panel.layouts.extends')
@section('title')
@lang('words.oauth')
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
                                <h4 class="card-title">@lang('words.oauth')</h4>
                            </div>
                            <form id="setting_form" method="POST" action="{{ route('panel.oauth.update') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.facebook_client_id')</label>
                                                <input type="text" class="form-control" name="facebook_client_id" value="{{ setting('facebook_client_id') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.facebook_client_secret')</label>
                                                <input type="text" class="form-control" name="facebook_client_secret" value="{{ setting('facebook_client_secret') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="title">@lang('words.facebook_redirect')</label>
                                                <div class="badge badge-light-danger">
                                                    @lang('words.facebook_redirect_alert')
                                                </div>
                                                <input type="text" class="form-control" name="facebook_redirect" value="{{ setting('facebook_redirect') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.google_client_id')</label>
                                                <input type="text" class="form-control" name="google_client_id" value="{{ setting('google_client_id') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.google_client_secret')</label>
                                                <input type="text" class="form-control" name="google_client_secret" value="{{ setting('google_client_secret') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="title">@lang('words.google_redirect')</label>
                                                <div class="badge badge-light-danger">
                                                    @lang('words.google_redirect_alert')
                                                </div>
                                                <input type="text" class="form-control" name="google_redirect" value="{{ setting('google_redirect') }}">
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