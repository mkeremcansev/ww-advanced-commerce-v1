
<?php $__env->startSection('title', __('words.payment_page')); ?>
<?php echo $__env->make('web.checkout.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="inner-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="product-details-frame">
                    <div class="row">
                        <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
                        <iframe src="https://www.paytr.com/odeme/guvenli/<?php echo e(Session::get('payment_token')); ?>" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
                        <script>iFrameResize({},'#paytriframe');</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/checkout/payment/index.blade.php ENDPATH**/ ?>