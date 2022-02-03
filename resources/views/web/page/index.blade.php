@extends('web.layouts.extends')
@section('title', $page->title)
@section('content')
<section class="inner-section" id="informations">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details-frame">
                    <h3 class="frame-title">{{ $page->title }}</h3>
                    <div class="tab-descrip">
                        {!! $page->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection