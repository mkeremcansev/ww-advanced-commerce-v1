@extends('panel.layouts.extends')
@section('title')
    @lang('words.member_list')
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
                        <div class="col-lg-9">
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">@lang('words.member_list')</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>@lang('words.name')</th>
                                                <th>@lang('words.surname')</th>
                                                <th>@lang('words.email_adress')</th>
                                                <th>@lang('words.actions')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($members as $m)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $m->name }}</td>
                                                    <td>{{ $m->surname }}</td>
                                                    <td>{{ $m->email }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="{{ route('panel.user.review.show', $m->id) }}">@lang('words.detail')</a>
                                                                <a class="dropdown-item text-danger" href="{{ route('panel.member.destroy', $m->id) }}">@lang('words.delete')</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
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
