<div class="container">
    @foreach (Cache::get('showcases') as $s)
        <div class="row mb-4">
            @foreach ($s->getAllShowcaseAttributes as $a)
                <div class="col-lg-{{ showcaseColonCalc($s->getAllShowcaseAttributes->count()) }}">
                    <div class="promo-img">
                        <a @if($a->url) href="{{ $a->url }}" @else href="{{ route('web.category.products.show', $a->getOneShowcaseAttributeCategory->slug) }}" @endif>
                            <img src="{{ asset($a->image) }}" alt="{{ setting('title') }}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>