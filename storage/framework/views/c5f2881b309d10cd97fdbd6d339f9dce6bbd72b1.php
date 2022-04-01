<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="<?php echo e(setting('title')); ?>">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo e(setting('title')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
    <link rel="icon" href="<?php echo e(asset(setting('favicon'))); ?>">
    <?php echo $__env->make('web.layouts.style.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <link rel="stylesheet" href="<?php echo e(asset('web/css/orderlist.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/error.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/story/demo/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/story/dist/zuck.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/story/dist/skins/snapgram.css')); ?>">
    
</head>
<body>
    <?php echo $__env->make('web.layouts.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
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
                    <a href="<?php echo e(route('web.index')); ?>">
                        <img src="<?php echo e(asset(setting('logo'))); ?>" alt="<?php echo e(setting('title')); ?>">
                    </a>
                    <button class="header-src"><i class="fas fa-search"></i>
                    </button>
                </div>
                <a href="<?php echo e(route('web.index')); ?>" class="header-logo">
                    <img src="<?php echo e(asset(setting('logo'))); ?>" alt="<?php echo e(setting('title')); ?>">
                </a>
                <?php if(auth()->guard()->check()): ?>
                    <div class="header-widget-group">
                        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                        <a href="<?php echo e(route('panel.index')); ?>" class="header-widget" title="<?php echo app('translator')->get('words.admin_panel'); ?>">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <?php endif; ?>
                        <a href="<?php echo e(route('web.account.index')); ?>" class="header-widget" title="<?php echo app('translator')->get('words.my_account'); ?>">
                            <i class="fa fa-user"></i>
                        </a>
                        <a href="<?php echo e(route('web.account.logout.store')); ?>" class="header-widget" title="<?php echo app('translator')->get('words.logout'); ?>">
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                    </div>
                <?php else: ?>
                    <a href="<?php echo e(route('web.user.login.index')); ?>" class="header-widget" title="<?php echo app('translator')->get('words.login'); ?>">
                        <i class="fa fa-user"></i>
                    </a>
                <?php endif; ?>
                
                <form class="header-form" id="realtime-search-submit" method="GET" action="<?php echo e(route('web.search.products.store')); ?>">
                    <input type="text" name="search" id="search_input_typing" autocomplete="off" placeholder="">
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
                        <span><?php echo app('translator')->get('words.total_price'); ?><small><?php echo e(getMoneyOrderShoppingCart(Cart::instance('cart')->subtotal())); ?></small></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <?php echo $__env->make('web.layouts.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.wish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('web.layouts.menu.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/header.blade.php ENDPATH**/ ?>