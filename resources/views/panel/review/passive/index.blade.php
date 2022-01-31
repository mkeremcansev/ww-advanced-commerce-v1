@extends('panel.layouts.extends')
@section('title')
    @lang('words.passive_review_list')
@endsection
@include('panel.review.script.script')
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
                                    <h4 class="card-title">@lang('words.passive_review_list')</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>@lang('words.rating')</th>
                                                <th>@lang('words.content')</th>
                                                <th>@lang('words.member')</th>
                                                <th>@lang('words.product')</th>
                                                <th>@lang('words.status')</th>
                                                <th>@lang('words.actions')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reviews as $r)
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                    <div class="item-rating">
                                                        <ul class="unstyled-list list-inline">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <li class="ratings-list-item @if($r->rating >= $i) custom-rating-orange @endif">
                                                                    <i data-feather="star" class="filled-star"></i>
                                                                </li>
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                    </td>
                                                    <td>{{ $r->content }}</td>
                                                    <td><a target="_blank" href="{{ route('panel.user.review.show', $r->getOneReviewUser->id) }}">{{ $r->getOneReviewUser->name }}</a></td>
                                                     <td><a target="_blank" href="{{ route('web.product.show',  $r->getOneReviewProduct->slug) }}">{{ $r->getOneReviewProduct->title }}</a></td>
                                                    <td>
                                                        <div class="custom-control custom-control-success custom-switch ml-auto">
                                                            <input type="checkbox" onchange="reviewStatus({{ $r->id }});" class="custom-control-input" id="products_status-{{ $r->id }}" @if($r->status) checked @endif/>
                                                                <label class="custom-control-label" for="products_status-{{ $r->id }}">
                                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                                </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="{{ route('panel.campaign.edit', $r->id) }}">@lang('words.edit')</a>
                                                                    <a href="{{ route('panel.review.destroy', $r->id) }}" class="dropdown-item text-danger">@lang('words.delete')</a>
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
