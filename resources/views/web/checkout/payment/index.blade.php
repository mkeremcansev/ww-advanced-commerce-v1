@extends('web.layouts.extends')
@section('title', __('words.payment_page'))
@include('web.checkout.script.script')
@section('content')
<section class="inner-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="product-details-frame">
                    <div class="row">
                        <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
                        <iframe src="https://www.paytr.com/odeme/guvenli/{{ Session::get('payment_token') }}" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
                        <script>iFrameResize({},'#paytriframe');</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection