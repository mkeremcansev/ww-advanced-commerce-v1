
<?php $__env->startSection('title', __('words.register')); ?>
<?php echo $__env->make('web.register.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-5">
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2><?php echo app('translator')->get('words.join_now'); ?></h2>
                            <p><?php echo app('translator')->get('words.join_now_text'); ?></p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('words.name'); ?>" id="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('words.surname'); ?>" id="surname">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo app('translator')->get('words.email_adress'); ?>" id="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="<?php echo app('translator')->get('words.password'); ?>" id="password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="<?php echo app('translator')->get('words.repeat_password'); ?>" id="repeat">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="check">
                                    <label class="form-check-label" for="check">
                                        <?php echo app('translator')->get('words.accept_all_contracts'); ?>
                                    </label>
                                </div>
                                <div class="form-button">
                                    <button type="button" id="add-to-register"><?php echo app('translator')->get('words.register'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p><?php echo app('translator')->get('words.already_have_an_account'); ?><a href="<?php echo e(route('web.user.login.index')); ?>"><?php echo app('translator')->get('words.login'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/register/index.blade.php ENDPATH**/ ?>