
<?php $__env->startSection('title', __('words.go_to_payment_title')); ?>
<?php $__env->startSection('description', setting('description')); ?>
<?php $__env->startSection('keywords', setting('keywords')); ?>
<?php $__env->startSection('content'); ?>
<section class="inner-section offer-part">
    <div class="container">
        <div class="row justify-content-center">
            <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="offer-card">
                        <a class="text-center" href="<?php echo e(route($m->route)); ?>">
                            <i class="<?php echo e($m->icon); ?> mb-2 payment-last-icon"></i>
                        </a>
                        <div class="offer-div">
                            <a href="<?php echo e(route($m->route)); ?>"><h5 class="offer-code text-center"><?php echo e($m->title); ?><?php if($m->price): ?> <?php echo app('translator')->get('words.plus_price', ['price'=>getMoneyOrder($m->price)]); ?> <?php endif; ?></h5></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/checkout/method/index.blade.php ENDPATH**/ ?>