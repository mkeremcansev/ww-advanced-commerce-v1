@extends('web.layouts.extends')
@section('title', $product->getOneProductAttributes->title)
@section('description', $product->getOneProductSeoAttributes->description)
@section('keywords', $product->getOneProductSeoAttributes->keywords)
@include('web.product.script.script')
@section('content')
@php($p = $product->getOneProductAttributes)
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                            @foreach (getProductLabel($p->discount, $p->price, $product->created_at, $product->getAllProductReviews->avg('rating')) as $l)
                                @if ($l['status'])
                                    <label class="details-label {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                @endif
                            @endforeach
                        </div>
                        <ul class="details-preview">
                            @foreach ($product->getAllProductImages as $i)
                                <li><img src="{{ asset($i->image) }}" alt="{{ $p->title }}"></li>
                            @endforeach
                        </ul>
                        <ul class="details-thumb">
                            @foreach ($product->getAllProductImages as $i)
                                <li><img src="{{ asset($i->image) }}" alt="{{ $p->title }}"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                <ul class="product-navigation">
                    <h3>{{ $p->title }} </h3>
                </ul>
                    <div class="details-content">
                        <div class="details-meta">
                            <p>@lang('words.category')<span>{{ $product->getOneProductCategory->title }}</span></p>
                            <p>@lang('words.brand')<span>{{ $product->getOneProductBrand->title }}</span></p>
                        </div>
                        <div class="details-rating">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="@if( round((float)$product->getAllProductReviews->avg('rating')) >= $i) active @endif  icofont-star"></i>
                            @endfor
                            <a href="#product-review-section">@lang('words.review_count', ['count'=>$product->getAllProductReviews->count()])</a>
                        </div>
                        <h3 class="details-price">
                            @if ($p->discount)
                                <del>{{ getMoneyOrder($p->price) }}</del>
                                <span>{{ getMoneyOrder($p->discount) }}</span>
                            @else
                                <span>{{ getMoneyOrder($p->price) }}</span>
                            @endif
                        </h3>
                        <p class="details-desc">
                            <div class="mb-4">
                                {!! getShowMore($p->description).'...' !!}
                                <a class="main-text-color" href="#informations">@lang('words.show_more')</a>
                            </div>
                        </p>
                            @foreach ($product->getAllProductVariants as $v)
                            <div class="attr-detail attr-size">
                                <strong>{{ $v->title }}</strong>
                                <ul class="list-filter size-filter font-small">
                                    @foreach ($v->getAllVariantAttributes as $a)
                                        @if ($a->stock)
                                            @if ($a->price)
                                                <li class="custom-data-tooltip" data-tooltip="@lang('words.plus_price', ['price'=>getMoneyOrder($a->price)])" variant-hash="{{ $a->hash }}">
                                                    <a class="variant-attr" variant-stock="{{ $a->stock }}">
                                                        {{ $a->title }}
                                                    </a>
                                                </li>
                                            @else
                                                <li class="variant-price" variant-hash="{{ $a->hash }}" variant-price="{{ $a->price }}">
                                                    <a class="variant-attr" variant-stock="{{ $a->stock }}">{{ $a->title }}</a>
                                                </li>
                                            @endif
                                        @else
                                                <li><a class="custom-disabled-alert" variant-stock="{{ $a->stock }}">{{ $a->title }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                            <p class="custom-stock"></p>
                            <div class="details-action-group mt-4">
                                <a class="details-wish wish w-100 custom-cursor-pointer" id="add-to-wishlist">
                                    <i class="icofont-heart"></i>
                                    <span>@lang('words.add_to_wishlist')</span>
                                </a>
                            </div>
                            @if (setting('whatsapp_info'))
                                <div class="details-action-group mt-4">
                                    <a class="details-wish wish w-100 custom-cursor-pointer" target="_blank" href="@lang('words.whatsapp_url', ['url'=>'https://wa.me', 'phone'=>setting('phone'), 'product'=>$p->title, 'current_url'=>url()->current()])">
                                        <i class="fab fa-whatsapp"></i>
                                        <span>@lang('words.information_from_whatsapp')</span>
                                    </a>
                                </div>
                            @endif
                            <div class="detail-action-group mt-4">
                                <div class="product-action">
                                    <button class="action-minus">
                                        <i class="icofont-minus"></i>
                                    </button>
                                    <input class="action-input" type="text" value="1" min="1" id="quantity">
                                    <button class="action-plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                                <button class="detail-add-btn w-100" id="add-to-cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    @lang('words.add_to_cart')
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section" id="informations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame">
                        <h3 class="frame-title">@lang('words.description')</h3>
                        <div class="tab-descrip">
                            {!! $p->description !!}
                        </div>
                    </div>
                    <div class="product-details-frame">
                        <h3 class="frame-title">@lang('words.information')</h3>
                        <table class="table table-bordered">
                            <tbody>
                                @foreach ($product->getAllProductInformations as $i)
                                    <tr>
                                        <th scope="row">{{ $i->title }}</th>
                                        <td>{{ $i->description }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="product-details-frame" id="product-review-section">
                        @if ($product->getAllProductReviews->count())
                            <h3 class="frame-title">@lang('words.reviews', ['count'=>$product->getAllProductReviews->count()])</h3>
                            <ul class="review-list">
                                    @foreach ($product->getAllProductReviews as $r)
                                        <li class="review-item">
                                            <div class="review-media">
                                                <h5 class="review-meta">
                                                    <a>{{ $r->getOneReviewUser->name }}</a>
                                                    <span>{{ $r->created_at->diffForHumans() }}</span>
                                                </h5>
                                            </div>
                                            <ul class="review-rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <li class="@if($r->rating >= $i) icofont-ui-rating @else icofont-ui-rate-blank @endif "></li>
                                                @endfor
                                            </ul>
                                            <p class="review-desc">{{ $r->content }}</p>
                                        </li>
                                    @endforeach
                            </ul>
                        @else
                                <p class="text-center">@lang('words.not_have_product_review')</p>
                        @endif
                    </div>
                    @auth
                        @if(!$product->getAllProductAuthReviews->contains('user_id',Auth::user()->id) AND Auth::user()->email_verified_at)
                            <div class="product-details-frame">
                                <div class="review-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="star-rating">
                                                <input type="radio" class="rating-input" name="rating" id="star-1" value="5">
                                                <label for="star-1"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-2" value="4">
                                                <label for="star-2"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-3" value="3">
                                                <label for="star-3"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-4" value="2">
                                                <label for="star-4"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-5" value="1">
                                                <label for="star-5"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="review_content" placeholder="@lang('words.content')"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" id="add-to-review" class="btn btn-inline">
                                                <span>@lang('words.add_review')</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </section>
@endsection