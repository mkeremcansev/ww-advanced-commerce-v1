<div class="container">
    <?php $__currentLoopData = Cache::get('showcases'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row mb-4">
            <?php $__currentLoopData = $s->getAllShowcaseAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-<?php echo e(showcaseColonCalc($s->getAllShowcaseAttributes->count())); ?>">
                    <div class="promo-img">
                        <a <?php if($a->url): ?> href="<?php echo e($a->url); ?>" <?php else: ?> href="<?php echo e(route('web.category.products.show', $a->getOneShowcaseAttributeCategory->slug)); ?>" <?php endif; ?>>
                            <img src="<?php echo e(asset($a->image)); ?>" alt="<?php echo e(setting('title')); ?>">
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/homepage/layouts/showcase.blade.php ENDPATH**/ ?>