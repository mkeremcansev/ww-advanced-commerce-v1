<section class="section niche-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                        <li>
                            <a href="#top-new" class="tab-link active" data-bs-toggle="tab">
                                <i class="icofont-sale-discount"></i>
                                <span>@lang('words.new_products')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-star"></i>
                                <span>@lang('words.popular_products')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-disc" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-sale-discount"></i>
                                <span>@lang('words.discounted_products')</span>
                            </a>
                        </li>
                </ul>
            </div>
        </div>
            @include('web.homepage.layouts.new')
            @include('web.homepage.layouts.popular')
            @include('web.homepage.layouts.discount')
    </div>
</section>