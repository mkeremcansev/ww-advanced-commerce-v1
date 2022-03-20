
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('words.banner'); ?>
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
                                <h4 class="card-title"><?php echo app('translator')->get('words.banner'); ?></h4>
                            </div>
                            <form method="POST" action="<?php echo e(route('panel.banner.update')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="logo"><?php echo app('translator')->get('words.right_banner'); ?></label>
                                                <input type="file" class="form-control" name="right">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="favicon"><?php echo app('translator')->get('words.left_banner'); ?></label>
                                                <input type="file" class="form-control" name="left">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50"><?php echo app('translator')->get('words.right_banner'); ?></p>
                                                    <input type="checkbox" name="right_status" <?php if(setting('right_status')): ?> checked <?php endif; ?> class="custom-control-input" id="right_status">
                                                    <label class="custom-control-label" for="right_status"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="custom-control custom-control-primary custom-switch">
                                                    <p class="mb-50"><?php echo app('translator')->get('words.left_banner'); ?></p>
                                                    <input type="checkbox" name="left_status" <?php if(setting('left_status')): ?> checked <?php endif; ?>  class="custom-control-input" id="left_status">
                                                    <label class="custom-control-label" for="left_status"></label>
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
                                        <h4 class="card-title"><?php echo app('translator')->get('words.right_banner'); ?></h4>
                                        <a href="javascript:void(0)">
                                            <img src="<?php echo e(asset(setting('right'))); ?>"
                                                class="img-fluid rounded mb-1 w-50" />
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <h4 class="card-title"><?php echo app('translator')->get('words.left_banner'); ?></h4>
                                        <a href="javascript:void(0)">
                                            <img src="<?php echo e(asset(setting('left'))); ?>"
                                                class="img-fluid rounded mb-1 w-50" />
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
<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/general/banner/index.blade.php ENDPATH**/ ?>