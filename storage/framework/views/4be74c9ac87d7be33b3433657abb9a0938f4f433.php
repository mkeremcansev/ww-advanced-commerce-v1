
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.coupon_list'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="responsive-datatable">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <?php if($m = Session::get('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        <?php echo e($m); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title"><?php echo app('translator')->get('words.coupon_list'); ?></h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><?php echo app('translator')->get('words.code'); ?></th>
                                                <th><?php echo app('translator')->get('words.price'); ?></th>
                                                <th><?php echo app('translator')->get('words.usage_count'); ?></th>
                                                <th><?php echo app('translator')->get('words.actions'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo e($c->code); ?></td>
                                                    <td><?php echo e($c->price); ?></td>
                                                    <td><?php echo e($c->usage); ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('words.actions'); ?></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="<?php echo e(route('panel.coupon.edit', $c->id)); ?>"><?php echo app('translator')->get('words.edit'); ?></a>
                                                                <form action="<?php echo e(route('panel.coupon.destroy', $c->id)); ?>" method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button class="dropdown-item text-danger w-100"><?php echo app('translator')->get('words.delete'); ?></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/coupon/index.blade.php ENDPATH**/ ?>