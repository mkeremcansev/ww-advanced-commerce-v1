@extends('web.layouts.extends')
@section('content')
    @include('web.homepage.layouts.category')
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="promo-img"><a href=""><img src="{{ asset('web') }}/images/promo/home/06.jpg"
                                alt="promo"></a></div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="promo-img"><a href=""><img src="{{ asset('web') }}/images/promo/home/07.jpg"
                                alt="promo"></a></div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="promo-img"><a href=""><img src="{{ asset('web') }}/images/promo/home/08.jpg"
                                alt="promo"></a></div>
                </div>
            </div>
        </div>
    </div>
    <section class="section recent-part">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                @foreach ($r_products as $r)
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label p-2">
                                    @foreach (getProductLabel($r->getOneProductAttributes->discount, $r->getOneProductAttributes->price, $r->getOneProductAttributes->created_at, $r->getAllProductReviews->avg('rating')) as $l)
                                        @if ($l['status'])
                                            <label class="label-text {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                        @endif
                                    @endforeach
                                </div>
                                <a class="product-image" href="{{ route('web.product.show', $r->getOneProductAttributes->slug) }}">
                                    <img src="{{ asset($r->getOneProductImages->image) }}" class="rounded-3" alt="{{ $r->getOneProductAttributes->title }}">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="{{ route('web.product.show', $r->getOneProductAttributes->slug) }}">{{ $r->getOneProductAttributes->title }}</a>
                                </h6>
                                <h6 class="product-price">
                                @if ($r->getOneProductAttributes->discount)
                                    <del>{{ getMoneyOrder($r->getOneProductAttributes->price) }}</del>
                                    <span>{{ getMoneyOrder($r->getOneProductAttributes->discount) }}</span>
                                @else
                                    <span>{{ getMoneyOrder($r->getOneProductAttributes->price) }}</span>
                                @endif
                                </h6>
                                <a href="{{ route('web.product.show', $r->getOneProductAttributes->slug) }}" class="product-add" title="@lang('words.detail')">
                                    <i class="fas fa-search"></i>
                                    <span>@lang('words.detail')</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section feature-part">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="product-video.html"><img
                                    src="{{ asset('web') }}/images/product/09.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video" href="../../../watch.html"
                                    class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                    title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="product-video.html"><img
                                    src="{{ asset('web') }}/images/product/10.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video" href="../../../watch.html"
                                    class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                    title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="product-video.html"><img
                                    src="{{ asset('web') }}/images/product/11.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video" href="../../../watch.html"
                                    class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                    title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="product-video.html"><img
                                    src="{{ asset('web') }}/images/product/12.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video" href="../../../watch.html"
                                    class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                    title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="product-video.html"><img
                                    src="{{ asset('web') }}/images/product/13.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video" href="../../../watch.html"
                                    class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                    title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="product-video.html"><img
                                    src="{{ asset('web') }}/images/product/14.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video" href="../../../watch.html"
                                    class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a
                                    title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img
                                            src="{{ asset('web') }}/images/product/15.jpg" alt="product"></a>
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
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img
                                            src="{{ asset('web') }}/images/product/16.jpg" alt="product"></a>
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
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img
                                            src="{{ asset('web') }}/images/product/17.jpg" alt="product"></a>
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
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img
                                            src="{{ asset('web') }}/images/product/18.jpg" alt="product"></a>
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
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img
                                            src="{{ asset('web') }}/images/product/19.jpg" alt="product"></a>
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
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img
                                            src="{{ asset('web') }}/images/product/20.jpg" alt="product"></a>
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
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a href="#top-order" class="tab-link active" data-bs-toggle="tab"><i
                                    class="icofont-price"></i><span>top order</span></a></li>
                        <li><a href="#top-rate" class="tab-link" data-bs-toggle="tab"><i
                                    class="icofont-star"></i><span>top rating</span></a></li>
                        <li><a href="#top-disc" class="tab-link" data-bs-toggle="tab"><i
                                    class="icofont-sale-discount"></i><span>top discount</span></a></li>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/02.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/03.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/04.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/05.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/06.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/07.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/08.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/09.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/10.jpg" alt="product"></a>
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
            <div class="tab-pane fade" id="top-rate">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/11.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/12.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/13.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/14.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/15.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/16.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/17.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/18.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/19.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/20.jpg" alt="product"></a>
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
            <div class="tab-pane fade" id="top-disc">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/06.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/07.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/08.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/09.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/10.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/11.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/12.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/13.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/14.jpg" alt="product"></a>
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
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="{{ asset('web') }}/images/product/15.jpg" alt="product"></a>
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
        </div>
    </section>
    <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form"><input type="text"
                            placeholder="Enter Your Email Address"><button><span><i
                                    class="icofont-ui-email"></i>Subscribe</span></button></form>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
