@extends('panel.layouts.extends')
@section('title')
    @lang('words.category_list')
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="responsive-datatable">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">@lang('words.category_list')</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>@lang('words.image')</th>
                                                <th>@lang('words.category_name')</th>
                                                <th>@lang('words.actions')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $c)
                                                <tr>
                                                    <td></td>
                                                    <td><img width="150" src="{{ asset($c->image) }}" alt="{{ $c->title }}"></td>
                                                    <td>{{ $c->title }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="{{ route('panel.category.edit', $c->id) }}">@lang('words.edit')</a>
                                                                <form method="POST" action="{{ route('panel.category.destroy', $c->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="dropdown-item text-danger w-100">@lang('words.delete')</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @if (count($c->getAllCategoriesCollection) > 0)
                                                    @include('panel.category.layouts.tree', ['getAllSubCategoriesCollection'=>$c->getAllCategoriesCollection, 'parent_title' => $c->title])
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
