
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
                        <h2>worried?</h2>
                        <p>No Problem! Just Follow The Simple Way</p>
                    </div>
                    <form class="user-form" method="POST" action="<?php echo e(route('web.forgot.password.update', ['token'=>$token])); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="<?php echo app('translator')->get('words.email_adress'); ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="<?php echo app('translator')->get('words.password'); ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="<?php echo app('translator')->get('words.repeat_password'); ?>">
                        </div>
                        <div class="form-button"><button type="submit"><?php echo app('translator')->get('words.save'); ?></button></div>
                    </form>
                </div>
                <div class="user-form-remind">
                    <p>Go Back To<a href="login.html">login here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/vendor/notifications/password/reset.blade.php ENDPATH**/ ?>