@extends('panel.layouts.extends')
@section('title')
    @lang('words.campaign_create')
@endsection
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="form-control-repeater">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
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
                                    <h4 class="card-title">@lang('words.campaign_create')</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('panel.campaign.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row d-flex align-items-end">
                                            <div class="col-md-12 col-12">

                                                <div class="form-group">
                                                        <label for="name">@lang('words.campaign_name')</label>
                                                        <input type="text" class="form-control" name="title">
                                                    </div>

                                                <div class="form-group">
                                                    <label>@lang('words.campaign_products')</label>
                                                        <select class="select2 form-control" name="products[]" multiple>
                                                            @foreach ($products as $p)
                                                                <option value="{{$p->id}}">{{$p->getOneProductAttributes->title}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="image">@lang('words.image')</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>

                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mb-1 mt-1 float-right">@lang('words.save')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection