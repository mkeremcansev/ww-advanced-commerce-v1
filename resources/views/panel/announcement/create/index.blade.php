@extends('panel.layouts.extends')
@section('title')
@lang('words.announcement_create')
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
                                <h4 class="card-title">@lang('words.announcement_create')</h4>
                            </div>
                            <form method="POST" action="{{ route('panel.announcement.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">@lang('words.content')</label>
                                        <textarea class="form-control" name="content"></textarea>
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