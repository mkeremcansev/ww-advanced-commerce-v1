   <script>
        let words = [
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                "<?php echo e($r->title); ?>".replace(/&amp;/g, '&'),
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = Cache::get('stories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                Zuck.buildTimelineItem(
                    "<?php echo e($s->title); ?>", 
                    "<?php echo e(asset(setting('favicon'))); ?>",
                    "<?php echo e($s->title); ?>",
                    "<?php echo e(route('web.index')); ?>",
                    timestamp(),
                    [
                        <?php $__currentLoopData = $s->getAllStoryAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        ["<?php echo e($s->title); ?>", "photo", 3, "<?php echo e(asset($a->image)); ?>", "<?php echo e(asset($a->image)); ?>", '', false, false, timestamp()],
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                ),
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ]
    });
   </script><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/script/script.blade.php ENDPATH**/ ?>