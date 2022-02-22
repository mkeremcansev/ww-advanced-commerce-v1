
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('words.coupon_edit'); ?>
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
                                <h4 class="card-title"><?php echo app('translator')->get('words.coupon_edit'); ?></h4>
                            </div>
                            <form method="POST" action="<?php echo e(route('panel.coupon.update', $coupon->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="title"><?php echo app('translator')->get('words.coupon_code_1'); ?></label>
                                        <input type="text" class="form-control" name="code" value="<?php echo e($coupon->code); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="title"><?php echo app('translator')->get('words.price'); ?></label>
                                        <input type="text" class="form-control" name="price" value="<?php echo e($coupon->price); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="title"><?php echo app('translator')->get('words.usage_count'); ?></label>
                                        <input type="text" class="form-control" name="usage" value="<?php echo e($coupon->usage); ?>">
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
<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/coupon/update/index.blade.php ENDPATH**/ ?>