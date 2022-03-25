<!DOCTYPE html>
<!-- Admin panel color :  #ff5e3a // var(--main-color) -->
<html id="modeChange" class="loading dark-layout" lang="<?php echo e(app()->getLocale()); ?>" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(setting('favicon'))); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/fonts/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/vendors/css/vendors.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/vendors/css/extensions/toastr.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/bootstrap-extended.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/colors.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/components.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/themes/dark-layout.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/themes/bordered-layout.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/themes/semi-dark-layout.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/core/menu/menu-types/horizontal-menu.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/plugins/extensions/ext-component-toastr.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/assets/css/style.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/vendors/css/forms/select/select2.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/pages/page-profile.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/vendors/css/pickers/pickadate/pickadate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/plugins/forms/pickers/form-pickadate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/pages/page-knowledge-base.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/pages/app-invoice.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body class="horizontal-layout horizontal-menu navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="">
    <nav class=" header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center navbar-dark" data-nav="brand-center">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item">
                        <a class="nav-link menu-toggle" href="javascript:void(0);">
                            <i class="ficon" data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <h4>
                    <a href=""><?php echo e(setting('title')); ?></a>
                </h4>
            </ul>
            <ul class="nav navbar-nav align-items-center ml-auto">
            </ul>
            <div class="custom-control custom-control-success custom-switch">
                <input onchange="modeChange();" type="checkbox" class="custom-control-input" id="modeSwitch" checked />
                <label class="custom-control-label" for="modeSwitch">
                    <span class="switch-icon-left"><i data-feather="sun"></i></span>
                    <span class="switch-icon-right"><i data-feather="moon"></i></span>
                </label>
            </div>
        </div>
    </nav>
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="shadow-bottom"></div>
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

                    <li class="nav-item">
                        <a href="<?php echo e(route('panel.index')); ?>" class="nav-link d-flex align-items-center">
                            <i data-feather="home"></i>
                            <span><?php echo app('translator')->get('words.homepage'); ?></span>
                        </a>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="settings"></i><span><?php echo app('translator')->get('words.general'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.setting.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.settings'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.theme.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.theme'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.design.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.homepage_design'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.banner.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.banner'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.method.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.payment_methods'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.paytr.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.paytr'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.smtp.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.smtp'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.oauth.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.oauth'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.css.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.css'); ?></span>
                                </a>
                                <?php if(app()->isDownForMaintenance()): ?>
                                    <a href="<?php echo e(route('panel.maintenance.off')); ?>" class="dropdown-item d-flex align-items-center">
                                        <i data-feather="chevrons-right"></i>
                                        <span><?php echo app('translator')->get('words.maintenance_off'); ?></span>
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('panel.maintenance.on')); ?>" class="dropdown-item d-flex align-items-center">
                                        <i data-feather="chevrons-right"></i>
                                        <span><?php echo app('translator')->get('words.maintenance_on'); ?></span>
                                    </a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="box"></i><span><?php echo app('translator')->get('words.product'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.product.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.product_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.product.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.product_create'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.brand.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.brand_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.brand.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.brand_create'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.category.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.category_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.category.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.category_create'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.multiple.product.price.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.multiple_product_price_edit'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="activity"></i><span><?php echo app('translator')->get('words.campaign'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.campaign.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.campaign_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.campaign.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.campaign_create'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="copy"></i><span><?php echo app('translator')->get('words.showcase'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.showcase.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.showcase_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.showcase.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.showcase_create'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="code"></i><span><?php echo app('translator')->get('words.coupon'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.coupon.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.coupon_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.coupon.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.coupon_create'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="refresh-cw"></i><span><?php echo app('translator')->get('words.review'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.review.active.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.active_review_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.review.passive.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.passive_review_list'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="dollar-sign"></i><span><?php echo app('translator')->get('words.order'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.order.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.order_list'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="user"></i><span><?php echo app('translator')->get('words.user'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.admin.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.admin_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.member.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.member_list'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="airplay"></i><span><?php echo app('translator')->get('words.slider'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.slider.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.slider_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.slider.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.slider_create'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="aperture"></i><span><?php echo app('translator')->get('words.story'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.story.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.story_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.story.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.story_create'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="book-open"></i><span><?php echo app('translator')->get('words.page'); ?></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.page.index')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.page_list'); ?></span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('panel.page.create')); ?>" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span><?php echo app('translator')->get('words.page_create'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a target="_blank" href="<?php echo e(route('web.index')); ?>" class="nav-link d-flex align-items-center">
                            <i data-feather="globe"></i>
                            <span><?php echo app('translator')->get('words.preview'); ?></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('web.account.logout.store')); ?>" class="nav-link d-flex align-items-center">
                            <i data-feather="x"></i>
                            <span><?php echo app('translator')->get('words.logout'); ?></span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/layouts/header.blade.php ENDPATH**/ ?>