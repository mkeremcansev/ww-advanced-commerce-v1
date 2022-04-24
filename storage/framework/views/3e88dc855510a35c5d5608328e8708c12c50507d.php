
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('words.oauth'); ?>
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
                                <h4 class="card-title"><?php echo app('translator')->get('words.oauth'); ?></h4>
                            </div>
                            <form id="setting_form" method="POST" action="<?php echo e(route('panel.oauth.update')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title"><?php echo app('translator')->get('words.facebook_client_id'); ?></label>
                                                <input type="text" class="form-control" name="facebook_client_id" value="<?php echo e(setting('facebook_client_id')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title"><?php echo app('translator')->get('words.facebook_client_secret'); ?></label>
                                                <input type="text" class="form-control" name="facebook_client_secret" value="<?php echo e(setting('facebook_client_secret')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="title"><?php echo app('translator')->get('words.facebook_redirect'); ?></label>
                                                <div class="badge badge-light-danger">
                                                    <?php echo app('translator')->get('words.facebook_redirect_alert'); ?>
                                                </div>
                                                <input type="text" class="form-control" name="facebook_redirect" value="<?php echo e(setting('facebook_redirect')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title"><?php echo app('translator')->get('words.google_client_id'); ?></label>
                                                <input type="text" class="form-control" name="google_client_id" value="<?php echo e(setting('google_client_id')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title"><?php echo app('translator')->get('words.google_client_secret'); ?></label>
                                                <input type="text" class="form-control" name="google_client_secret" value="<?php echo e(setting('google_client_secret')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="title"><?php echo app('translator')->get('words.google_redirect'); ?></label>
                                                <div class="badge badge-light-danger">
                                                    <?php echo app('translator')->get('words.google_redirect_alert'); ?>
                                                </div>
                                                <input type="text" class="form-control" name="google_redirect" value="<?php echo e(setting('google_redirect')); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right"><?php echo app('translator')->get('words.save'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/general/oauth/index.blade.php ENDPATH**/ ?>