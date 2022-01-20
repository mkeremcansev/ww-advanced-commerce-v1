@extends('panel.layouts.extends')
@section('title')
    @lang('words.category_edit')
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
                                    <h4 class="card-title">@lang('words.category_edit')</h4>
                                </div>
                                <form method="POST" action="{{ route('panel.category.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>@lang('words.up_category')</label>
                                            <select class="select2 form-control" name="parent_id">
                                                <option value="">@lang('words.main_category')</option>
                                                    @foreach ($categories as $c)
                                                        <option value="{{ $c->id }}">{{ $c->title }}</option>
                                                    @if (count($c->getAllCategoriesCollection) > 0)
                                                        @include('panel.category.create.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' => $c->title])
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">@lang('words.category_name')</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">@lang('words.image')</label>
                                            <input type="file" class="form-control" name="image">
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
