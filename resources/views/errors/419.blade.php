@extends('web.layouts.extends')
@section('title', '419')
@section('content')
<section class="error-part">
    <div class="container">
        <h1>419</h1>
        <h3>@lang('words.419_error_title')</h3>
        <p>@lang('words.419_error_content',['email'=>setting('mail')])</p>
        <a href="{{ route('web.index') }}">@lang('words.go_to_shopping')</a>
    </div>
</section>
@endsection