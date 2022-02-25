<div class="banner-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-category-slider slider-arrow slider-dots">
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e($s->image); ?>" alt="<?php echo e(setting('title')); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/homepage/layouts/slider.blade.php ENDPATH**/ ?>