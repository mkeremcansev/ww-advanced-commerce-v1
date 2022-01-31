
<?php $__env->startSection('title'); ?>
    Ana Sayfa
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php if($message = Session::get('success')): ?>
        <script>
            toastr.success('', '<?php echo e($message); ?>', {
                positionClass: "toast-bottom-right"
            })
        </script>
    <?php endif; ?>
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
                    <div class="row match-height">
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/homepage/index.blade.php ENDPATH**/ ?>