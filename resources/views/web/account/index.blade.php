@extends('web.layouts.extends')
@section('title', __('words.my_account'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@include('web.account.script.script')
@section('content')
<section class="inner-section profile-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>@lang('words.my_account')</h4>
                        <button data-bs-toggle="modal" data-bs-target="#profile-edit">@lang('words.change_password')</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">@lang('words.name')</label>
                                    <input class="form-control" type="text" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">@lang('words.surname')</label>
                                    <input class="form-control" type="text" value="{{ Auth::user()->surname }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">@lang('words.email_adress')</label>
                                    <input class="form-control" type="email" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>@lang('words.phone_numbers')</h4>
                        <button data-bs-toggle="modal" data-bs-target="#contact-add">@lang('words.user_phone_create')</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            @if (Auth::user()->getAllUserAttributePhones->count())
                                @foreach (Auth::user()->getAllUserAttributePhones as $u)
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card contact">
                                            <p>{{ $u->title }}</p>
                                            <ul>
                                                <li>
                                                    <button type="button" onclick="destroyUserAttribute('{{ $u->hash }}');" class="trash icofont-ui-delete" title="@lang('words.delete')"></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                 @endforeach
                            @else
                                 <p class="text-center mb-1">@lang('words.not_have_data')</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>@lang('words.adresses')</h4>
                        <button data-bs-toggle="modal" data-bs-target="#address-add">@lang('words.user_adress_create')</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            @if (Auth::user()->getAllUserAttributeAdresses->count())
                                @foreach (Auth::user()->getAllUserAttributeAdresses as $u)
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card address">
                                            <p>{{ $u->title }}</p>
                                            <ul class="user-action">
                                                <li>
                                                    <button type="button" onclick="destroyUserAttribute('{{ $u->hash }}');" class="trash icofont-ui-delete" title="@lang('words.delete')"></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-center mb-1">@lang('words.not_have_data')</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>@lang('words.my_reviews')</h4>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            @if (Auth::user()->getAllUserReviews->count())
                                @foreach (Auth::user()->getAllUserReviews as $r)
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card address">
                                                @if ($r->status)
                                                <h6 class="text-center text-success">
                                                    <a target="_blank" class="custom-primary-text" href="{{ route('web.product.show',$r->getOneReviewProduct->slug) }}">
                                                        {{ $r->getOneReviewProduct->title }}
                                                    </a>
                                                    @lang('words.review_status_seperator', ['status'=>__('words.active')])
                                                </h6>
                                                @else
                                                <h6 class="text-center text-danger">
                                                    <a target="_blank" class="custom-primary-text" href="{{ route('web.product.show',$r->getOneReviewProduct->slug) }}">
                                                        {{ $r->getOneReviewProduct->title }}
                                                    </a>
                                                    @lang('words.review_status_seperator', ['status'=>__('words.passive')])
                                                </h6>
                                                @endif
                                            <p>{{ $r->content }}</p>
                                            <ul class="user-action">
                                                <li>
                                                    <button type="button" onclick="destroyUserReview('{{ $r->hash }}');" class="trash icofont-ui-delete" title="@lang('words.delete')"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="review-rating text-center">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <li class="@if($r->rating >= $i) icofont-ui-rating @else icofont-ui-rate-blank @endif "></li>
                                            @endfor
                                        </ul>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-center mb-1">@lang('words.not_have_data')</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="contact-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>@lang('words.user_phone_create')</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">@lang('words.phone_number')</label>
                    <input class="form-control" type="text" id="phone">
                </div>
                <button class="form-btn" type="button" id="add-to-user-phone">@lang('words.save')</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3>@lang('words.user_adress_create')</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">@lang('words.adress')</label>
                    <textarea class="form-control" id="adress"></textarea>
                </div>
                <button class="form-btn" type="button" id="add-to-user-adress">@lang('words.save')</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <div class="modal-form">
                <div class="form-title">
                    <h3>@lang('words.change_password')</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">@lang('words.password')</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label class="form-label">@lang('words.repeat_password')</label>
                    <input type="password" class="form-control" id="repeat">
                </div>
                <button class="form-btn" type="button" id="change-to-password">@lang('words.save')</button>
            </div>
        </div>
    </div>
</div>
@endsection