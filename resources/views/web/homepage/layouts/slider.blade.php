<div class="banner-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-category-slider slider-arrow slider-dots">
                    @foreach ($sliders as $s)
                        <img src="{{ $s->image }}" alt="{{ setting('title') }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>