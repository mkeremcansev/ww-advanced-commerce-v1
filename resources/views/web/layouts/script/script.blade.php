   <script>
        let words = [
            @foreach ($categories as $r)
                "{{ $r->title }}".replace(/&amp;/g, '&'),
            @endforeach
        ];
        let i = 0;
        let timer;

        function typingEffect() {
        let word = words[i].split("");
        const loopTyping = function() {
            if (word.length > 0) {
            let text = document.getElementById('search_input_typing');
            text.setAttribute('placeholder', text.getAttribute('placeholder') + word.shift());
            } else {
                setTimeout(function(){
                    deletingEffect();
                }, 1500)
            
            return false;
            };
            timer = setTimeout(loopTyping, 50);
        };
        loopTyping();
        };

        function deletingEffect() {
        let word = words[i].split("");
        var loopDeleting = function() {
            if (word.length > 0) {
            word.pop();
            document.getElementById('search_input_typing').setAttribute('placeholder', word.join(""));
            } else {
            if (words.length > (i + 1)) {
                i++;
            } else {
                i = 0;
            };
            typingEffect();
                return false;
            };
            timer = setTimeout(loopDeleting, 50);
        };
        loopDeleting();
        };
        typingEffect();
        
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