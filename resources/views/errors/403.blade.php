@extends('web.layouts.extends')
@section('title', '403')
@section('content')
<section class="error-part">
    <div class="container">
        <h1>403</h1>
        <h3>@lang('words.not_have_role_title')</h3>
        <p>@lang('words.not_have_role_content', ['email'=>setting('mail')])</p>
        <a href="{{ route('web.index') }}">@lang('words.go_to_shopping')</a>
    </div>
</section>
@endsection