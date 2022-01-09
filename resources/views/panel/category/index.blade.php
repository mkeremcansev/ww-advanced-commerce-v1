@extends('panel.layouts.main')
@section('title')
    @lang('words.category-list')
@endsection
@section('script')
    @if ($message = Session::get('success'))
        <script>
            toastr.success('', "{{ $message }}", {
                positionClass: "toast-bottom-right"
            })
        </script>
    @elseif($message = Session::get('error'))
        <script>
            toastr.error('', "{{ $message }}", {
                positionClass: "toast-bottom-right"
            })
        </script>
    @endif
@endsection
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="responsive-datatable">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">@lang('words.category-list')</h4>

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
                                                                <a class="dropdown-item text-danger" href="">@lang('words.delete')</a>
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
