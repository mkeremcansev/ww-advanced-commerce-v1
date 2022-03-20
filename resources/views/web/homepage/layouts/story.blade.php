@section('script')
    <script>
        var currentSkin = getCurrentSkin();
        var stories = new Zuck('stories', {
        backNative: true,
        previousTap: true,
        skin: 'snapgram',
        autoFullScreen: false,
        avatars: false,
        list: false,
        cubeEffect: true,
        localStorage: true,
        stories: [
            @foreach (Cache::get('stories') as $s)
                Zuck.buildTimelineItem(
                    "{{ $s->title }}", 
                    "{{ asset(setting('favicon')) }}",
                    "{{ $s->title }}",
                    "{{ route('web.index') }}",
                    timestamp(),
                    [
                        @foreach ($s->getAllStoryAttributes as $a)
                        ["{{ $s->title }}", "photo", 3, "{{ asset($a->image) }}", "{{ asset($a->image) }}", '', false, false, timestamp()],
                        @endforeach
                    ]
                ),
            @endforeach
        ]
    });
    </script>
@endsection
<div class="container">
    <div id="stories" class="storiesWrapper"></div>
</div>