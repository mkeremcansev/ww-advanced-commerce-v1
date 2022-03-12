@extends('panel.layouts.extends')
@section('title')
    @lang('words.multiple_product_price_edit')
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            if($('#all_products').is(':checked')){
                    $('#form').hide()
                } else {
                    $('#form').show()
                }
            $('#all_products').on('change', function(){
                if($(this).is(':checked')){
                    $('#form').hide()
                } else {
                    $('#form').show()
                }
            })
        })
    </script>
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
                                    <h4 class="card-title">@lang('words.multiple_product_price_edit')</h4>
                                </div>
                                <form method="POST" action="{{ route('panel.multiple.product.price.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="alert alert-danger mb-3" role="alert">
                                            <div class="alert-body">
                                                @lang('words.multiple_product_price_edit_alert')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="all_products" name="all_products">
                                                        <label class="custom-control-label" for="all_products">@lang('words.all_products')</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="variant" name="variant">
                                                        <label class="custom-control-label" for="variant">@lang('words.variations_included')</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="up" name="up">
                                                        <label class="custom-control-label" for="up">@lang('words.up')</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="down" name="down">
                                                        <label class="custom-control-label" for="down">@lang('words.down')</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="form">
                                            <label>@lang('words.category')</label>
                                            <select class="select2 form-control" name="category_id">
                                                    @foreach ($categories as $c)
                                                        <option value="{{ $c->id }}">{{ $c->title }}</option>
                                                    @if (count($c->getAllCategoriesCollection) > 0)
                                                        @include('panel.multiple.product.price.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' => $c->title])
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">@lang('words.value')</label>
                                            <input type="text" class="form-control" name="value">
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
