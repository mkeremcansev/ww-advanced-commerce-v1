
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('words.settings'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul class="pt-1 pb-1">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if($m = Session::get('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    <?php echo e($m); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo app('translator')->get('words.settings'); ?></h4>
                            </div>
                            <form id="setting_form" method="POST" action="<?php echo e(route('panel.setting.update')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title"><?php echo app('translator')->get('words.title'); ?></label>
                                                <input type="text" class="form-control" name="title" value="<?php echo e(setting('title')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="facebook"><?php echo app('translator')->get('words.facebook'); ?></label>
                                                <input type="text" class="form-control" name="facebook" value="<?php echo e(setting('facebook')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="instagram"><?php echo app('translator')->get('words.instagram'); ?></label>
                                                <input type="text" class="form-control" name="instagram" value="<?php echo e(setting('instagram')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="twitter"><?php echo app('translator')->get('words.twitter'); ?></label>
                                                <input type="text" class="form-control" name="twitter" value="<?php echo e(setting('twitter')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mail"><?php echo app('translator')->get('words.email_adress'); ?></label>
                                                <input type="text" class="form-control" name="mail" value="<?php echo e(setting('mail')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone"><?php echo app('translator')->get('words.phone_number'); ?></label>
                                                <input type="text" class="form-control" name="phone" value="<?php echo e(setting('phone')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="logo"><?php echo app('translator')->get('words.logo'); ?></label>
                                                <input type="file" class="form-control" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="favicon"><?php echo app('translator')->get('words.favicon'); ?></label>
                                                <input type="file" class="form-control" name="favicon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description"><?php echo app('translator')->get('words.description'); ?></label>
                                        <textarea type="text" class="form-control" name="description"><?php echo e(setting('description')); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="keywords"><?php echo app('translator')->get('words.keywords'); ?></label>
                                        <textarea type="text" class="form-control" name="keywords"><?php echo e(setting('keywords')); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="adress"><?php echo app('translator')->get('words.adress'); ?></label>
                                        <textarea type="text" class="form-control" name="adress"><?php echo e(setting('adress')); ?></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50"><?php echo app('translator')->get('words.facebook_and_twitter_login'); ?></p>
                                                    <input type="checkbox" name="oauth" <?php if(setting('oauth')): ?> checked <?php endif; ?> class="custom-control-input" id="oauth">
                                                    <label class="custom-control-label" for="oauth"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50"><?php echo app('translator')->get('words.email_verification_status_change'); ?></p>
                                                    <input type="checkbox" name="verification" <?php if(setting('verification')): ?> checked <?php endif; ?>  class="custom-control-input" id="verification">
                                                    <label class="custom-control-label" for="verification"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50"><?php echo app('translator')->get('words.information_from_whatsapp'); ?></p>
                                                    <input type="checkbox" name="whatsapp_info" <?php if(setting('whatsapp_info')): ?> checked <?php endif; ?>  class="custom-control-input" id="whatsapp_info">
                                                    <label class="custom-control-label" for="whatsapp_info"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right"><?php echo app('translator')->get('words.save'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <h4 class="card-title"><?php echo app('translator')->get('words.updated_logo'); ?></h4>
                                        <a href="javascript:void(0)">
                                            <img src="<?php echo e(asset(setting('logo'))); ?>"
                                                class="img-fluid rounded mb-1" />
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <h4 class="card-title"><?php echo app('translator')->get('words.updated_favicon'); ?></h4>
                                        <a href="javascript:void(0)">
                                            <img src="<?php echo e(asset(setting('favicon'))); ?>"
                                                class="img-fluid rounded mb-1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/general/setting/index.blade.php ENDPATH**/ ?>