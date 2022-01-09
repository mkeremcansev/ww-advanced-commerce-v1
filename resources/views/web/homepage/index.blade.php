@extends('web.layouts.extends')
@section('content')
    @include('web.layouts.menu.navbar')
    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>asdas</span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <h5 class="mt-2">Mobile navbar</h5>
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </aside>
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>canseworks (5)</span></div><button
                class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{ asset('web') }}/images/product/01.jpg"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus"
                                title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{ asset('web') }}/images/product/02.jpg"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus"
                                title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{ asset('web') }}/images/product/03.jpg"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus"
                                title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{ asset('web') }}/images/product/04.jpg"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus"
                                title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{ asset('web') }}/images/product/05.jpg"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus"
                                title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                    type="submit"><span>apply</span></button></form><a class="cart-checkout-btn" href="checkout.html"><span
                    class="checkout-label">Proceed to Checkout</span><span class="checkout-price">$369.78</span></a>
        </div>
    </aside>
    <div class="mobile-menu">
        <a href="index.html" title="Home Page"><i class="fas fa-home"></i><span>Home</span>
        </a>
        <button class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>category</span>
        </button>
        <button class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup>
        </button>
        <a href="wishlist.html" title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup>
        </a>
        <a href="compare.html" title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup>
        </a>
    </div>
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group"><label class="view-label new">new</label><label
                                        class="view-label off">-10%</label></div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                    <li><img src="{{ asset('web') }}/images/product/01.jpg" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3 reviews)</a></div>
                                <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span>
                                </h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora
                                    magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
                                <div class="view-list-group"><label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group"><label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                                <div class="view-action-group"><a class="view-wish wish" href="#"
                                        title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                            wish</span></a><a class="view-compare" href="compare.html"
                                        title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                            This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
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
                                href="product-video.html"><img src="{{ asset('web') }}/images/product/02.jpg"
                                    alt="product"></a>
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
