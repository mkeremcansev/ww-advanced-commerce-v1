<div class="container mb-2 mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="simple-marquee-container">
                <div class="marquee-sibling">
					<i class="fa fa-bullhorn"></i>
				</div>
                <div class="marquee">
                    <ul class="marquee-content-items">
                        @foreach (Cache::get('announcements') as $a)
                            <li>{{ $a->content }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>