
<?php $__env->startSection('title'); ?>
    Ana Sayfa
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
                    <div class="col-md-12">
                        <?php if($m = Session::get('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    <?php echo e($m); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="card">
                                <div class="card-body">
                                    <?php if(app()->isDownForMaintenance()): ?>
                                        <a href="<?php echo e(route('panel.maintenance.off')); ?>" class="btn btn-danger waves-effect waves-float waves-light">
                                            <?php echo app('translator')->get('words.maintenance_off'); ?>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('panel.maintenance.on')); ?>" class="btn btn-success waves-effect waves-float waves-light">
                                            <?php echo app('translator')->get('words.maintenance_on'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/homepage/index.blade.php ENDPATH**/ ?>