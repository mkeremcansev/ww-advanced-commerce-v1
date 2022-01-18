<div class="section promo-part">
    <div class="container">
        <div class="row">
            @foreach (Cache::get('r_campaigns') as $c)
            <div class="col-sm-4 col-md-4 col-lg-4">
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