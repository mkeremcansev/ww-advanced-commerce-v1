<section class="section niche-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="#top-order" class="tab-link active" data-bs-toggle="tab">
                            <i class="icofont-price"></i>
                            <span>top order</span>
                        </a>
                    </li>
                    @if ($p_products_count)
                        <li>
                            <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-star"></i>
                                <span>@lang('words.popular_products')</span>
                            </a>
                        </li>
                    @endif
                    
                    @if ($d_products_count)
                        <li>
                            <a href="#top-disc" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-sale-discount"></i>
                                <span>@lang('words.discounted_products')</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="tab-pane fade show active" id="top-order">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text order">314</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img
                                    src="{{ asset('web') }}/images/product/01.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video" href="../../../watch.html"
                                    class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                    title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i
                                        class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($p_products_count)
            @include('web.homepage.layouts.popular')
        @endif
        @if ($d_products_count)
            @include('web.homepage.layouts.discount')
        @endif
    </div>
</section>