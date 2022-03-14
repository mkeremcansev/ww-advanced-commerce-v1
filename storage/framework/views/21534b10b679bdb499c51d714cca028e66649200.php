
<?php $__env->startSection('title', __('words.homepage')); ?>
<?php $__env->startSection('description', setting('description')); ?>
<?php $__env->startSection('keywords', setting('keywords')); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = setting('design'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('web.homepage.layouts.'.$d['title'].'', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/homepage/index.blade.php ENDPATH**/ ?>