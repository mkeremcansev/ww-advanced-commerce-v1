<!DOCTYPE html>
<!-- Admin panel color :  #ff5e3a // var(--main-color) -->
<html id="modeChange" class="loading dark-layout" lang="{{ app()->getLocale() }}" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting('favicon')) }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/extensions/toastr.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/bootstrap-extended.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/components.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/dark-layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/bordered-layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/semi-dark-layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/plugins/extensions/ext-component-toastr.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/forms/select/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/pages/page-profile.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/pages/page-knowledge-base.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/pages/app-invoice.css') }}">
    @yield('style')
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
                    <a href="">{{ setting('title') }}</a>
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
                        <a href="{{ route('panel.index') }}" class="nav-link d-flex align-items-center">
                            <i data-feather="home"></i>
                            <span>@lang('words.homepage')</span>
                        </a>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="settings"></i><span>@lang('words.general')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.setting.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.settings')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.theme.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.theme')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.design.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.homepage_design')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.banner.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.banner')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.method.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.payment_methods')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.paytr.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.paytr')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.smtp.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.smtp')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.oauth.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.oauth')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.css.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.css')</span>
                                </a>
                                @if (app()->isDownForMaintenance())
                                    <a href="{{ route('panel.maintenance.off') }}" class="dropdown-item d-flex align-items-center">
                                        <i data-feather="chevrons-right"></i>
                                        <span>@lang('words.maintenance_off')</span>
                                    </a>
                                @else
                                    <a href="{{ route('panel.maintenance.on') }}" class="dropdown-item d-flex align-items-center">
                                        <i data-feather="chevrons-right"></i>
                                        <span>@lang('words.maintenance_on')</span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="box"></i><span>@lang('words.product')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.product.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.product_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.product.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.product_create')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.brand.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.brand_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.brand.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.brand_create')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.category.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.category_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.category.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.category_create')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.multiple.product.price.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.multiple_product_price_edit')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="activity"></i><span>@lang('words.campaign')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.campaign.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.campaign_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.campaign.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.campaign_create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="copy"></i><span>@lang('words.showcase')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.showcase.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.showcase_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.showcase.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.showcase_create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="code"></i><span>@lang('words.coupon')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.coupon.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.coupon_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.coupon.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.coupon_create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="refresh-cw"></i><span>@lang('words.review')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.review.active.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.active_review_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.review.passive.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.passive_review_list')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="dollar-sign"></i><span>@lang('words.order')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.order.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.order_list')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="user"></i><span>@lang('words.user')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.admin.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.admin_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.member.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.member_list')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="airplay"></i><span>@lang('words.slider')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.slider.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.slider_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.slider.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.slider_create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="aperture"></i><span>@lang('words.story')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.story.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.story_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.story.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.story_create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="book-open"></i><span>@lang('words.page')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.page.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.page_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('panel.page.create') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.page_create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a target="_blank" href="{{ route('web.index') }}" class="nav-link d-flex align-items-center">
                            <i data-feather="globe"></i>
                            <span>@lang('words.preview')</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('web.account.logout.store') }}" class="nav-link d-flex align-items-center">
                            <i data-feather="x"></i>
                            <span>@lang('words.logout')</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
