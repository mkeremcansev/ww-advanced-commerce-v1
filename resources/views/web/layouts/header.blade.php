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
    <title>Category Home - Greeny</title>
    <link rel="icon" href="{{ asset('web/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/fontawesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/slickslider/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/niceselect/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/home-category.css') }}">
</head>

<body>
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="header-top-welcome">
                        <p>Welcome to Ecomart in Your Dream Online Store!</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="header-top-select">
                        <div class="header-select"><i class="icofont-world"></i><select class="select">
                                <option value="english" selected="">english</option>
                                <option value="bangali">bangali</option>
                                <option value="arabic">arabic</option>
                            </select></div>
                        <div class="header-select"><i class="icofont-money"></i><select class="select">
                                <option value="english" selected="">doller</option>
                                <option value="bangali">pound</option>
                                <option value="arabic">taka</option>
                            </select></div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4">
                    <ul class="header-top-list">
                        <li><a href="offer.html">offers</a></li>
                        <li><a href="faq.html">need help</a></li>
                        <li><a href="contact.html">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    <button class="header-user"><img src="{{ asset('web') }}/images/user.png" alt="user">
                    </button>
                    <a href="index.html"><img src="{{ asset('web') }}/images/logo.png" alt="logo">
                    </a>
                    <button class="header-src"><i class="fas fa-search"></i>
                    </button>
                </div>
                <a href="index.html" class="header-logo"><img src="{{ asset('web') }}/images/logo.png" alt="logo">
                </a>
                <a href="login.html" class="header-widget" title="My Account">
                    <img src="{{ asset('web') }}/images/user.png" alt="user"><span>join</span>
                </a>
                <form class="header-form"><input type="text" placeholder="Search anything...">
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <div class="header-widget-group">
                    <a href="compare.html" class="header-widget" title="Compare List"><i
                            class="fas fa-random"></i><sup>0</sup>
                    </a>
                    <a href="wishlist.html" class="header-widget" title="Wishlist"><i
                            class="fas fa-heart"></i><sup>0</sup>
                    </a>
                    <button class="header-widget header-cart" title="Cartlist"><i
                            class="fas fa-shopping-basket"></i><sup>9+</sup><span>total
                            price<small>$345.00</small></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
