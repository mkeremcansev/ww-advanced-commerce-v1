@extends('panel.layouts.main')
@section('title')
    @lang('words.category_edit')
@endsection
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    @lang('words.category_alert')
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="pt-1 pb-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">@lang('words.category_edit')</h4>
                                </div>
                                <form method="POST" enctype="multipart/form-data" action="{{ route('panel.category.update', $category->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>@lang('words.main_category')</label>
                                            <select class="select2 form-control" name="parent_id">
                                                @if ($category->parent_id == 0)
                                                    <option value="" selected readonly>@lang('words.not')</option>
                                                @else
                                                    @foreach ($categories as $c)
                                                        <option value="{{ $c->id }}"
                                                            {{ $c->getCategoryBlock($category->id, $c->parent_id) }}
                                                            @if ($category->parent_id == $c->id) selected
                                                        @elseif ($category->id == $c->id) disabled
                                                    @endif>
                                                    {{ $c->title }}
                                                    </option>
                                                    @if (count($c->getAllCategoriesCollection) > 0)
                                                        @include('panel.category.update.layouts.parents',
                                                        ['getAllSubCategoriesCollection' =>
                                                        $c->getAllCategoriesCollection, 'parent_title' =>
                                                        $c->title])
                                                    @endif
                                                @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">@lang('words.category_name')</label>
                                            <input type="text" class="form-control" value="{{ $category->title }}"
                                                name="title">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">@lang('words.image')</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>

                                        <div class="form-group" id="updated_image">
                                            <label for="customFile">@lang('words.updated_image')</label>
                                            <div class="custom-file">
                                                <img width="150" src="{{ asset($category->image) }}" alt="">
                                            </div>
                                        </div>

                                        <button type="submit" id="update" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
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
