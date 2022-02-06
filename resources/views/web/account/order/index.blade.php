@extends('web.layouts.extends')
@section('title', 'asdasdas')
@section('content')
<section class="inner-section orderlist-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#01</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                    recieved</span></li>
                                            <li class="order-track-item active"><i class="icofont-close"></i><span>order
                                                    processed</span></li>
                                            <li class="order-track-item active"><i class="icofont-close"></i><span>order
                                                    shipped</span></li>
                                            <li class="order-track-item active"><i class="icofont-close"></i><span>order
                                                    delivered</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection