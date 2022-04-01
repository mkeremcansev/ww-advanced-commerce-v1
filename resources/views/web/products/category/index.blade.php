@extends('web.layouts.extends')
@section('title', __('words.category'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@section('content')
    <section class="inner-section shop-part">
        <div class="container">
            @if ($products->count())
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                    @foreach ($products as $p)
                    @php($product = $p->getOneProductAttributes)
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label p-2">
                                        @foreach (getProductLabel($product->discount, $product->price, $p->created_at, $p->getAllProductReviews->avg('rating')) as $l)
                                            @if ($l['status'])
                                                <label class="label-text {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                            @endif
                                        @endforeach
                                    </div>
                                    <a class="product-image" href="{{ route('web.product.show', $product->slug) }}">
                                        <img src="{{ asset($p->getOneProductImages->image) }}" class="rounded-3" alt="{{ $product->title }}">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="@if(round((float)$p->getAllProductReviews->avg('rating')) >= $i) active @endif  icofont-star"></i>
                                        @endfor
                                    </div>
                                    <h6 class="product-name">
                                        <a href="{{ route('web.product.show', $product->slug) }}">{{ $product->title }}</a>
                                    </h6>
                                    <h6 class="product-price">
                                    @if ($product->discount)
                                        <del>{{ getMoneyOrder($product->price) }}</del>
                                        <span>{{ getMoneyOrder($product->discount) }}</span>
                                    @else
                                        <span>{{ getMoneyOrder($product->price) }}</span>
                                    @endif
                                    </h6>
                                    <a href="{{ route('web.product.show', $product->slug) }}" class="product-add" title="@lang('words.detail')">
                                        <i class="fas fa-search"></i>
                                        <span>@lang('words.detail')</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
            <div class="row row-cols-12 row-cols-md-12 row-cols-lg-12 row-cols-xl-12">
                <div class="product-card pb-5 pt-5 mt-5">
                        <h5 class="text-center">@lang('words.category_not_have_product')</h5>
                    </div>
            </div>
            @endif
             {{ $products->links('vendor.pagination.pagination') }}
        </div>
    </section>
@endsection