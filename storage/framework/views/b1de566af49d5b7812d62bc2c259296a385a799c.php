<?php if(setting('left_status')): ?>
    <div class="left_banner">
        <img src="<?php echo e(asset(setting('left'))); ?>" alt="<?php echo e(setting('title')); ?>">
    </div>
<?php endif; ?>
<?php if(setting('right_status')): ?>
    <div class="right_banner">
        <img src="<?php echo e(asset(setting('right'))); ?>" alt="<?php echo e(setting('title')); ?>">
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/banner.blade.php ENDPATH**/ ?>