@extends('panel.layouts.extends')
@section('title')
    Ana Sayfa
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
                    <div class="col-md-12">
                        @if ($m = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    {{ $m }}
                                </div>
                            </div>
                        @endif
                        <div class="card">
                                <div class="card-body">
                                    @if (app()->isDownForMaintenance())
                                        <a href="{{ route('panel.maintenance.off') }}" class="btn btn-danger waves-effect waves-float waves-light">
                                            @lang('words.maintenance_off')
                                        </a>
                                    @else
                                        <a href="{{ route('panel.maintenance.on') }}" class="btn btn-success waves-effect waves-float waves-light">
                                            @lang('words.maintenance_on')
                                        </a>
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
