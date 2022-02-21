@extends('web.layouts.extends')
@section('title', __('words.homepage'))
@section('content')
    @include('web.homepage.layouts.category')
    @include('web.homepage.layouts.campaign')
    @include('web.homepage.layouts.random')
    @include('web.homepage.layouts.tab')
@endsection