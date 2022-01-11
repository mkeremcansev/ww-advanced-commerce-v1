@extends('web.layouts.extends')
@section('title')
    asdasd
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            let add_to_cart_btn = $('#add-to-cart')    
            add_to_cart_btn.on('click', function(){
                let product_hash =  '{{ $product->hash }}'
                 let variants = [];
                $('ul .active').each(function() { 
                    variants.push($(this).attr('variant-hash')); 
                });
                let quantity = $('#quantity').val()
                $.ajax({
                    method: 'POST',
                    url: '{{ route("web.shopping.cart.store") }}',
                    data: {product_hash:product_hash, variants:variants, quantity:quantity},
                    dataType:'json',
                    success: function (response) {
                        if(response.status == 'error'){
                            iziToast.error({
                                position: 'topRight',
                                message: response.message
                            })
                        } else if(response.status == 'success'){
                            add_to_cart_btn.addClass('custom-disabled')
                            iziToast.success({
                                position: 'topRight',
                                message: response.message
                            })
                            setTimeout(() => {
                                location.reload()
                            }, 1500);
                        }
                    },
                    error: function (response) {
                        iziToast.error({
                            position: 'topRight',
                            message: getValidateMessage(response)
                        })
                    }
                })
            })
        })
    </script>
@endsection
@section('content')
    <section class="inner-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                            @foreach (getProductLabel($product->getOneProductAttributes->discount, $product->getOneProductAttributes->price, $product->getOneProductAttributes->created_at) as $l)
                                @if ($l['status'])
                                    <label class="details-label {{ $l['code'] }}">{{ $l['title'].$l['value'] }}</label>
                                @endif
                            @endforeach
                        </div>
                        <ul class="details-preview">
                            @foreach ($product->getAllProductImages as $i)
                                <li><img src="{{ asset($i->image) }}" alt="{{ $product->getOneProductAttributes->title }}"></li>
                            @endforeach
                        </ul>
                        <ul class="details-thumb">
                            @foreach ($product->getAllProductImages as $i)
                                <li><img src="{{ asset($i->image) }}" alt="{{ $product->getOneProductAttributes->title }}"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="product-navigation">
                        <li class="product-nav-prev">
                            <a href="#">
                                <i class="icofont-arrow-left"></i>
                                prev product
                                <span class="product-nav-popup">
                                    <img src="{{ asset('web') }}/images/product/02.jpg" alt="product">
                                    <small>green chilis</small>
                                </span>
                            </a>
                        </li>
                        <li class="product-nav-next">
                            <a href="#">
                                next product
                                <i class="icofont-arrow-right"></i>
                                <span class="product-nav-popup">
                                    <img src="{{ asset('web') }}/images/product/03.jpg" alt="product">
                                    <small>green chilis</small>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="details-content">
                        <h3 class="details-name">
                            <a>{{ $product->getOneProductAttributes->title }}</a>
                        </h3>
                        <div class="details-meta">
                            <p>@lang('words.code')<span>{{ $product->getOneProductAttributes->sku }}</span></p>
                            <p>@lang('words.brand')<span>{{ $product->getOneProductBrand->title }}</span></p>
                        </div>
                        <div class="details-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a href="#">(3 reviews)</a>
                        </div>
                        <h3 class="details-price">
                            @if ($product->getOneProductAttributes->discount)
                                <del>{{ getMoneyOrder($product->getOneProductAttributes->price) }}</del>
                                <span>{{ getMoneyOrder($product->getOneProductAttributes->discount) }}</span>
                            @else
                                <span>{{ getMoneyOrder($product->getOneProductAttributes->price) }}</span>
                            @endif
                        </h3>
                        <p class="details-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit facere harum
                            natus amet soluta fuga consectetur alias veritatis quisquam ab eligendi itaque eos maiores
                            quibusdam.
                        </p>
                            @foreach ($product->getAllProductVariants as $v)
                            <div class="attr-detail attr-size">
                                <strong>{{ $v->title }}</strong>
                                <ul class="list-filter size-filter font-small">
                                    @foreach ($v->getAllVariantAttributes as $a)
                                    @if ($a->price)
                                        <li variant-hash="{{ $a->hash }}">
                                            <a class="asdasd" variant-stock="{{ $a->stock }}">{{ $a->title }}
                                                <strong>@lang('words.plus_price', ['price'=>getMoneyOrder($a->price)])</strong>
                                            </a>
                                        </li>
                                    @else
                                        <li variant-hash="{{ $a->hash }}"><a class="asdasd" variant-stock="{{ $a->stock }}">{{ $a->title }}</a></li>
                                    @endif
                                    
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
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
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame">
                        <h3 class="frame-title">@lang('words.description')</h3>
                        <div class="tab-descrip">
                            {!! $product->getOneProductAttributes->description !!}
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
                    {{-- <div class="product-details-frame">
                        <h3 class="frame-title">Reviews (2)</h3>
                        <ul class="review-list">
                            <li class="review-item">
                                <div class="review-media"><a class="review-avatar" href="#"><img
                                            src="images/avatar/01.jpg" alt="review"></a>
                                    <h5 class="review-meta"><a href="#">miron mahmud</a><span>June 02, 2020</span></h5>
                                </div>
                                <ul class="review-rating">
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rate-blank"></li>
                                </ul>
                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
                                    hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis
                                    dolores nulla excepturi ea nobis!</p>
                                <form class="review-reply"><input type="text"
                                        placeholder="reply your thoughts"><button><i
                                            class="icofont-reply"></i>reply</button></form>
                                <ul class="review-reply-list">
                                    <li class="review-reply-item">
                                        <div class="review-media"><a class="review-avatar" href="#"><img
                                                    src="images/avatar/02.jpg" alt="review"></a>
                                            <h5 class="review-meta"><a href="#">labonno khan</a><span><b>author
                                                        -</b>June 02, 2020</span></h5>
                                        </div>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                            blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply"><input type="text"
                                                placeholder="reply your thoughts"><button><i
                                                    class="icofont-reply"></i>reply</button></form>
                                    </li>
                                    <li class="review-reply-item">
                                        <div class="review-media"><a class="review-avatar" href="#"><img
                                                    src="images/avatar/03.jpg" alt="review"></a>
                                            <h5 class="review-meta"><a href="#">tahmina bonny</a><span>June 02,
                                                    2020</span></h5>
                                        </div>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                            blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply"><input type="text"
                                                placeholder="reply your thoughts"><button><i
                                                    class="icofont-reply"></i>reply</button></form>
                                    </li>
                                </ul>
                            </li>
                            <li class="review-item">
                                <div class="review-media"><a class="review-avatar" href="#"><img
                                            src="images/avatar/04.jpg" alt="review"></a>
                                    <h5 class="review-meta"><a href="#">shipu shikdar</a><span>June 02, 2020</span></h5>
                                </div>
                                <ul class="review-rating">
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rate-blank"></li>
                                </ul>
                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
                                    hic amet qui velit, molestiae suscipit perferendis, autem doloremque blanditiis
                                    dolores nulla excepturi ea nobis!</p>
                                <form class="review-reply"><input type="text"
                                        placeholder="reply your thoughts"><button><i
                                            class="icofont-reply"></i>reply</button></form>
                            </li>
                        </ul>
                    </div>
                    <div class="product-details-frame">
                        <h3 class="frame-title">add your review</h3>
                        <form class="review-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="star-rating"><input type="radio" name="rating" id="star-1"><label
                                            for="star-1"></label><input type="radio" name="rating" id="star-2"><label
                                            for="star-2"></label><input type="radio" name="rating" id="star-3"><label
                                            for="star-3"></label><input type="radio" name="rating" id="star-4"><label
                                            for="star-4"></label><input type="radio" name="rating" id="star-5"><label
                                            for="star-5"></label></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"><textarea class="form-control"
                                            placeholder="Describe"></textarea></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><input type="email" class="form-control"
                                            placeholder="Email"></div>
                                </div>
                                <div class="col-lg-12"><button class="btn btn-inline"><i
                                            class="icofont-water-drop"></i><span>drop your review</span></button></div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>related this items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/01.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label><label
                                    class="label-text new">new</label></div><button class="product-wish wish"><i
                                    class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/02.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/03.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/04.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/05.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/06.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/07.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/08.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card product-disable">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/09.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/10.jpg" alt="product"></a>
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
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>view all related</span></a></div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection