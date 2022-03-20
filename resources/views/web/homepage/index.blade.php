@extends('web.layouts.extends')
@section('title', __('words.homepage'))
@section('description', setting('description'))
@section('keywords', setting('keywords'))
@section('content')
@foreach (setting('design') as $d)
    @include('web.homepage.layouts.'.$d['title'].'')
@endforeach
@endsection 