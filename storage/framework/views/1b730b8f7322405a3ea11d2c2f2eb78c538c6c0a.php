
<?php $__env->startSection('title'); ?>
    qweqwewqewqq
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2><?php echo app('translator')->get('words.forgot_your_password'); ?></h2>
                        <p><?php echo app('translator')->get('words.forgot_password_p'); ?></p>
                    </div>
                    <form class="user-form" method="POST" action="<?php echo e(route('web.forgot.password.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="<?php echo app('translator')->get('words.email_adress'); ?>">
                        </div>
                        <div class="form-button"><button type="submit"><?php echo app('translator')->get('words.send'); ?></button></div>
                    </form>
                </div>
                <div class="user-form-remind">
                    <p><?php echo app('translator')->get('words.already_have_an_account'); ?><a href="<?php echo e(route('web.user.login.index')); ?>"><?php echo app('translator')->get('words.login'); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/vendor/notifications/password/forgot.blade.php ENDPATH**/ ?>