<section class="suggest-part">
    <div class="container">
        <ul class="suggest-slider slider-arrow">
            @foreach (Cache::get('r_categories') as $rc)
                <li>
                    <a class="suggest-card" href="{{ route('web.category.products.show', $rc->slug) }}"><img src="{{ asset($rc->image) }}" alt="{{ $rc->title }}">
                        <h5>{{ $rc->title }} <span>@lang('words.category_product_count', ['number'=>$rc->getAllCategoryProducts->count()])</span></h5>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>