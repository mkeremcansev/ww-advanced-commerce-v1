<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="email" content="">
    <meta name="profile" content="">
    <meta name="template" content="">
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo e(setting('title')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <link rel="icon" href="<?php echo e(asset('web/images/favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/fonts/flaticon/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/fonts/icofont/icofont.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/fonts/fontawesome/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/vendor/venobox/venobox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/vendor/slickslider/slick.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/vendor/niceselect/nice-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/vendor/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/home-category.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/product-details.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/user-auth.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/profile.css')); ?>">
</head>
<body>
    <?php echo $__env->make('web.layouts.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="header-top-welcome">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="header-top-select">
                        <div class="header-select"><i class="icofont-world"></i><select class="select">
                                <option value="english" selected="">Lorem</option>
                                <option value="bangali">bangali</option>
                                <option value="arabic">arabic</option>
                            </select></div>
                        <div class="header-select"><i class="icofont-world"></i><select class="select">
                                <option value="english" selected="">Lorem</option>
                                <option value="bangali">pound</option>
                                <option value="arabic">taka</option>
                            </select></div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4">
                    <ul class="header-top-list">
                        <li><a href="offer.html">Lorem</a></li>
                        <li><a href="faq.html">Lorem</a></li>
                        <li><a href="contact.html">Lorem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('web.account.index')); ?>" class="header-user">
                            <i class="fa fa-user"></i>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('web.user.login.index')); ?>" class="header-user">
                            <i class="fa fa-user"></i>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo e(route('web.index')); ?>"><img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="logo">
                    </a>
                    <button class="header-src"><i class="fas fa-search"></i>
                    </button>
                </div>
                <a href="<?php echo e(route('web.index')); ?>" class="header-logo">
                    <img src="<?php echo e(asset('web/images/logo.png')); ?>" alt="logo">
                </a>
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('web.account.index')); ?>" class="header-widget" title="My Account">
                        <i class="fa fa-user"></i>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('web.user.login.index')); ?>" class="header-widget" title="My Account">
                        <i class="fa fa-user"></i>
                    </a>
                <?php endif; ?>
                
                <form class="header-form" method="GET" action="<?php echo e(route('web.search.products.store')); ?>">
                    <input type="text" name="search" placeholder="<?php echo app('translator')->get('words.you_can_search'); ?>">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <div class="header-widget-group">
                    <button class="header-widget header-wish">
                        <i class="fas fa-heart"></i>
                        <sup><?php echo e(Cart::instance('wishlist')->content()->count()); ?></sup>
                    </button>
                    <button class="header-widget header-cart">
                        <i class="fas fa-shopping-basket"></i>
                        <sup><?php echo e(Cart::instance('cart')->content()->count()); ?></sup>
                        <span><?php echo app('translator')->get('words.total_price'); ?><small><?php echo e(getMoneyOrderShoppingCart(Cart::subtotal())); ?></small></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <?php echo $__env->make('web.layouts.menu.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.wish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/layouts/header.blade.php ENDPATH**/ ?>