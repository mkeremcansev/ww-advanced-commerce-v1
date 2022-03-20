@extends('panel.layouts.extends')
@section('title')
@lang('words.settings')
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
                                <h4 class="card-title">@lang('words.settings')</h4>
                            </div>
                            <form id="setting_form" method="POST" action="{{ route('panel.setting.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">@lang('words.title')</label>
                                                <input type="text" class="form-control" name="title" value="{{ setting('title') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="facebook">@lang('words.facebook')</label>
                                                <input type="text" class="form-control" name="facebook" value="{{ setting('facebook') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="instagram">@lang('words.instagram')</label>
                                                <input type="text" class="form-control" name="instagram" value="{{ setting('instagram') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="twitter">@lang('words.twitter')</label>
                                                <input type="text" class="form-control" name="twitter" value="{{ setting('twitter') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mail">@lang('words.email_adress')</label>
                                                <input type="text" class="form-control" name="mail" value="{{ setting('mail') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone">@lang('words.phone_number')</label>
                                                <input type="text" class="form-control" name="phone" value="{{ setting('phone') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="logo">@lang('words.logo')</label>
                                                <input type="file" class="form-control" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="favicon">@lang('words.favicon')</label>
                                                <input type="file" class="form-control" name="favicon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">@lang('words.description')</label>
                                        <textarea type="text" class="form-control" name="description">{{ setting('description') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="keywords">@lang('words.keywords')</label>
                                        <textarea type="text" class="form-control" name="keywords">{{ setting('keywords') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="adress">@lang('words.adress')</label>
                                        <textarea type="text" class="form-control" name="adress">{{ setting('adress') }}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50">@lang('words.facebook_and_twitter_login')</p>
                                                    <input type="checkbox" name="oauth" @if(setting('oauth')) checked @endif class="custom-control-input" id="oauth">
                                                    <label class="custom-control-label" for="oauth"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50">@lang('words.email_verification_status_change')</p>
                                                    <input type="checkbox" name="verification" @if(setting('verification')) checked @endif  class="custom-control-input" id="verification">
                                                    <label class="custom-control-label" for="verification"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50">@lang('words.information_from_whatsapp')</p>
                                                    <input type="checkbox" name="whatsapp_info" @if(setting('whatsapp_info')) checked @endif  class="custom-control-input" id="whatsapp_info">
                                                    <label class="custom-control-label" for="whatsapp_info"></label>
                                                </div>
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
                                        <h4 class="card-title">@lang('words.updated_logo')</h4>
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset(setting('logo')) }}"
                                                class="img-fluid rounded mb-1" />
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <h4 class="card-title">@lang('words.updated_favicon')</h4>
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset(setting('favicon')) }}"
                                                class="img-fluid rounded mb-1" />
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