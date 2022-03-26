
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.verify_your_email_adress'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
       <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-5">
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2><?php echo app('translator')->get('words.hello_name', ['name'=>Auth::user()->name]); ?></h2>
                            <p><?php echo app('translator')->get('words.account_verify_text'); ?></p>
                        </div>
                     
                       <a class="checkout-and-go-btn text-center" href="<?php echo e(route('verification.send')); ?>">
                            <?php echo app('translator')->get('words.verify_your_email_adress'); ?>
                        </a>
                           
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/vendor/notifications/unverified.blade.php ENDPATH**/ ?>