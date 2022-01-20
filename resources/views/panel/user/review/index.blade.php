@extends('panel.layouts.extends')
@section('title')
    @lang('words.user_review_text',['name'=>$user->name, 'surname'=>$user->surname])
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="kb-category-search">
                    <div class="row">
                        <div class="col-12">
                            @if ($m = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        {{ $m }}
                                    </div>
                                </div>
                            @endif
                            <div class="card knowledge-base-bg text-center">
                                <div class="card-body">
                                    <h2 class="text-primary mb-3">@lang('words.user_review_text',['name'=>$user->name, 'surname'=>$user->surname])</h2>
                                    <form class="kb-search-input">
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i data-feather="search"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="searchbar" placeholder="@lang('words.you_can_search')" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="knowledge-base-category">
                    <div class="row kb-search-content-info match-height">
                        @if ($user->getAllUserReviews->count())
                            @foreach ($user->getAllUserReviews as $r)
                                <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="kb-title">
                                                <div class="item-rating">
                                                    <ul class="unstyled-list list-inline">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <li class="ratings-list-item @if($r->rating >= $i) custom-rating-orange @endif">
                                                                <i data-feather="star" class="filled-star"></i>
                                                            </li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </h6>
                                            <div class="list-group list-group-circle">
                                                <p>{{ $r->content }}</p>
                                            </div>
                                            @if ($r->status)
                                                <div class="mb-1">
                                                    <a href="{{ route('panel.user.review.update', ['id'=>$r->id, 'status'=>0]) }}" class="btn btn-warning waves-effect waves-float waves-light w-100">@lang('words.to_passive')</a>
                                                </div>
                                            @else
                                                <div class="mb-1">
                                                    <a href="{{ route('panel.user.review.update', ['id'=>$r->id, 'status'=>1]) }}" class="btn btn-success waves-effect waves-float waves-light w-100">@lang('words.to_active')</a>
                                                </div>
                                            @endif
                                            <div class="mb-1">
                                                <a href="{{ route('panel.user.review.destroy', $r->id) }}" class="btn btn-danger waves-effect waves-float waves-light w-100">@lang('words.delete')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 text-center">
                                <h4 class="mt-4">@lang('words.user_not_have_review', ['name'=>$user->name, 'surname'=>$user->surname])</h4>
                            </div>
                        @endif
                        <div class="col-12 text-center no-result no-items">
                            <h4 class="mt-4">@lang('words.not_have_review')</h4>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
