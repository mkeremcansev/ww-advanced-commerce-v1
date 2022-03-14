
<?php $__env->startSection('title', __('words.login')); ?>
<?php $__env->startSection('description', setting('description')); ?>
<?php $__env->startSection('keywords', setting('keywords')); ?>
<?php echo $__env->make('web.login.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-5">
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2><?php echo app('translator')->get('words.welcome'); ?></h2>
                            <p><?php echo app('translator')->get('words.welcome_text'); ?></p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="<?php echo app('translator')->get('words.email_adress'); ?>"></div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="<?php echo app('translator')->get('words.password'); ?>"></div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                    <label class="form-check-label" for="check"><?php echo app('translator')->get('words.remember_me'); ?></label>
                                </div>
                                <div class="form-button">
                                    <button type="button" id="add-to-login"><?php echo app('translator')->get('words.login'); ?></button>
                                    <p>
                                        <?php echo app('translator')->get('words.forgot_your_password'); ?>
                                        <a href="<?php echo e(route('web.forgot.password.index')); ?>"><?php echo app('translator')->get('words.forgot_password'); ?></a>
                                        <p><?php echo app('translator')->get('words.dont_have_account'); ?><a href="<?php echo e(route('web.user.register.index')); ?>"><?php echo app('translator')->get('words.register'); ?></a></p>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php if(setting('oauth')): ?>
                        <div class="user-form-remind">
                            <a class="checkout-and-go-btn mt-1 mb-3" href="<?php echo e(route('web.user.oauth.facebook.index')); ?>">
                                <i class="fab fa-facebook"></i>
                                <span class="checkout-label"><?php echo app('translator')->get('words.login_with_facebook'); ?></span>
                            </a>
                            <a class="checkout-and-go-btn mt-1 mb-3" href="<?php echo e(route('web.user.oauth.google.index')); ?>">
                                <i class="fab fa-google"></i>
                                <span class="checkout-label"><?php echo app('translator')->get('words.login_with_google'); ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/login/index.blade.php ENDPATH**/ ?>