<div class="promo-part mb-4">
    <div class="container">
        <div class="row">
            @foreach (Cache::get('r_campaigns') as $c)
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="promo-img">
                        <a href="{{ route('web.campaign.products.show', $c->slug) }}">
                            <img src="{{ asset($c->image) }}" alt="{{ $c->title }}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>