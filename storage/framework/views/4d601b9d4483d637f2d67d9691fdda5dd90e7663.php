
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('words.css'); ?>
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
                                <h4 class="card-title"><?php echo app('translator')->get('words.css'); ?></h4>
                            </div>
                            <form id="setting_form" method="POST" action="<?php echo e(route('panel.css.update')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            <?php echo app('translator')->get('words.css_code_alert'); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea style="" type="text" class="form-control css-custom-style" name="css" rows="10"><?php echo e(setting('css')); ?></textarea>
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
<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/general/css/index.blade.php ENDPATH**/ ?>