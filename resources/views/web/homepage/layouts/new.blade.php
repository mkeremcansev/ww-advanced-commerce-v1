<section class="section newitem-part">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="new-slider slider-arrow">
                    @foreach (Cache::get('n_products') as $n)
                    @php($product = $n->getOneProductAttributes)
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label p-2">
                                    @foreach (getProductLabel($product->discount, $product->price, $product->created_at, $n->getAllProductReviews->avg('rating')) as $l)
                                        @if ($l['status'])
                                            <label class="label-text {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                        @endif
                                    @endforeach
                                </div>
                                <a class="product-image" href="{{ route('web.product.show', $product->slug) }}">
                                    <img src="{{ asset($n->getOneProductImages->image) }}" class="rounded-3" alt="{{ $product->title }}">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="@if(round((float)$n->getAllProductReviews->avg('rating')) >= $i) active @endif  icofont-star"></i>
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
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>