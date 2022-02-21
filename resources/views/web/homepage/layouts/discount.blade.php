@if (Cache::get('d_products')->count())
<div class="tab-pane fade" id="top-disc">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
        @foreach (Cache::get('d_products') as $d)
            @php($product = $d->getOneProductAttributes)
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label p-2">
                                @foreach (getProductLabel($product->discount, $product->price, $d->created_at, $d->getAllProductReviews->avg('rating')) as $l)
                                    @if ($l['status'])
                                        <label class="label-text {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                    @endif
                                @endforeach
                            </div>
                            <a class="product-image" href="{{ route('web.product.show', $product->slug) }}">
                                <img src="{{ asset($d->getOneProductImages->image) }}" class="rounded-3" alt="{{ $product->title }}">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="@if(round((float)$d->getAllProductReviews->avg('rating')) >= $i) active @endif  icofont-star"></i>
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
</div>
@else
<div class="tab-pane fade" id="top-disc">
    <p class="text-center">@lang('words.not_have_product')</p>
</div>
@endif
