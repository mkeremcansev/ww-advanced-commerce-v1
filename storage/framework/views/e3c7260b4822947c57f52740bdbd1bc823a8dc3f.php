<?php $__env->startSection('script'); ?>
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
    </script>
<?php $__env->stopSection(); ?>
<div class="container">
    <div id="stories" class="storiesWrapper"></div>
</div><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/homepage/layouts/story.blade.php ENDPATH**/ ?>