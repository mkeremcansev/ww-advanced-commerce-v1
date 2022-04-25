
<?php $__env->startSection('title', $page->title); ?>
<?php $__env->startSection('description', setting('description')); ?>
<?php $__env->startSection('keywords', setting('keywords')); ?>
<?php $__env->startSection('content'); ?>
<section class="inner-section" id="informations">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details-frame">
                    <h3 class="frame-title"><?php echo e($page->title); ?></h3>
                    <div class="tab-descrip">
                        <?php echo $page->description; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/page/index.blade.php ENDPATH**/ ?>