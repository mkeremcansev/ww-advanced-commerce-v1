@extends('web.layouts.extends')
@section('title', __('words.homepage'))
@section('content')

    @if ($r_categories_count)
        @include('web.homepage.layouts.category')
    @endif

    @if ($r_campaigns_count)
        @include('web.homepage.layouts.campaign')
    @endif

    @if ($r_products_count)
        @include('web.homepage.layouts.random')
    @endif

    @if ($n_products_count)
        @include('web.homepage.layouts.new')
    @endif

    @if ($p_products_count OR $d_products_count)
    @include('web.homepage.layouts.tab')
    @endif

@endsection
