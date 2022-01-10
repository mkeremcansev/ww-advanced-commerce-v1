<!DOCTYPE html>
<!-- Admin panel color :  #ff5e3a // var(--main-color) -->
<html id="modeChange" class="loading dark-layout" lang="{{ app()->getLocale() }}" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting('favicon')) }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/css/plugins/extensions/ext-component-tree.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/vendors/css/extensions/jstree.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/vendors/css/extensions/toastr.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/bootstrap-extended.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/components.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/themes/dark-layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/themes/bordered-layout.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/themes/semi-dark-layout.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/css/plugins/extensions/ext-component-toastr.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/vendors/css/forms/select/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Panel/app-assets/css/pages/page-profile.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Panel/app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
</head>

<body class="horizontal-layout horizontal-menu navbar-floating footer-static" data-open="hover"
    data-menu="horizontal-menu" data-col="">
    <nav class="
                header-navbar
                navbar-expand-lg navbar navbar-fixed
                align-items-center
                navbar-shadow navbar-brand-center navbar-dark
            "
        data-nav="brand-center">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item">
                        <a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                data-feather="menu"></i></a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <h4>
                    <a href="">{{ setting('title') }}</a>
                </h4>
            </ul>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">

                            </span>
                        </div>
                        <span class="avatar"><img class="round"
                                src="{{ asset('Panel/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                alt="avatar" height="40" width="40" />
                            <span class="avatar-status-online"> </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="page-profile.html">
                            <i class="mr-50" data-feather="user"></i>
                            @lang('words.my-account')
                        </a>
                        <a class="dropdown-item" href="">
                            <i class="mr-50" data-feather="power"></i>
                            @lang('words.logout')
                        </a>
                    </div>
                </li>
            </ul>
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
                        <a class="dropdown-toggle nav-link d-flex  align-items-center" data-toggle="dropdown"><i data-feather="layers"></i><span>@lang('words.category')</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('panel.category.index') }}" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.category_list')</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="" data-toggle="dropdown">
                                    <i data-feather="chevrons-right"></i>
                                    <span>@lang('words.category_create')</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a target="_blank" href="" class="nav-link d-flex align-items-center">
                            <i data-feather="globe"></i>
                            <span>@lang('words.preview')</span>
                        </a>
                    </li>

                    <div class="custom-control custom-control-success custom-switch mt-2 ml-auto">
                        <input onchange="modeChange();" type="checkbox" class="custom-control-input" id="modeSwitch" checked />
                        <label class="custom-control-label" for="modeSwitch">
                            <span class="switch-icon-left"><i data-feather="sun"></i></span>
                            <span class="switch-icon-right"><i data-feather="moon"></i></span>
                        </label>
                    </div>

                </ul>
            </div>
        </div>
    </div>
</body>

</html>
