<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="email" content="">
    <meta name="profile" content="">
    <meta name="template" content="">
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ setting('title') }} - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <link rel="icon" href="{{ asset(setting('favicon')) }}">
    @include('web.layouts.style.style')
    <link rel="stylesheet" href="{{ asset('web/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/fontawesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/slickslider/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/niceselect/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/home-category.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/product-details.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/user-auth.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/orderlist.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/error.css') }}">
</head>
<body>
    @include('web.layouts.loader')
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    @auth
                        <a href="{{ route('web.account.index') }}" class="header-user">
                            <i class="fa fa-user"></i>
                        </a>
                    @else
                        <a href="{{ route('web.user.login.index') }}" class="header-user">
                            <i class="fa fa-user"></i>
                        </a>
                    @endauth
                    <a href="{{ route('web.index') }}">
                        <img src="{{ asset(setting('logo')) }}" alt="{{ setting('title') }}">
                    </a>
                    <button class="header-src"><i class="fas fa-search"></i>
                    </button>
                </div>
                <a href="{{ route('web.index') }}" class="header-logo">
                    <img src="{{ asset(setting('logo')) }}" alt="{{ setting('title') }}">
                </a>
                @auth
                    <div class="header-widget-group">
                        @role('admin')
                        <a href="{{ route('panel.index') }}" class="header-widget" title="@lang('words.admin_panel')">
                            <i class="fa fa-wrench"></i>
                        </a>
                        @endrole
                        <a href="{{ route('web.account.index') }}" class="header-widget" title="@lang('words.my_account')">
                            <i class="fa fa-user"></i>
                        </a>
                        <a href="{{ route('web.account.logout.store') }}" class="header-widget" title="@lang('words.logout')">
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                    </div>
                @else
                    <a href="{{ route('web.user.login.index') }}" class="header-widget" title="@lang('words.login')">
                        <i class="fa fa-user"></i>
                    </a>
                @endauth
                
                <form class="header-form" method="GET" action="{{ route('web.search.products.store') }}">
                    <input type="text" name="search" id="search_input_typing" placeholder="">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <div class="header-widget-group">
                    <button class="header-widget header-wish">
                        <i class="fas fa-heart"></i>
                        <sup>{{ Cart::instance('wishlist')->content()->count() }}</sup>
                    </button>
                    <button class="header-widget header-cart">
                        <i class="fas fa-shopping-basket"></i>
                        <sup>{{ Cart::instance('cart')->content()->count() }}</sup>
                        <span>@lang('words.total_price')<small>{{ getMoneyOrderShoppingCart(Cart::instance('cart')->subtotal()) }}</small></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    @include('web.layouts.menu.navbar')
    @include('web.layouts.menu.sidebar')
    @include('web.layouts.menu.cart')
    @include('web.layouts.menu.wish')
    @include('web.layouts.menu.mobile')
