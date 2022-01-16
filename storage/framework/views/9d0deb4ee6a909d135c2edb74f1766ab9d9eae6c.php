
<?php $__env->startSection('title', __('words.homepage')); ?>
<?php $__env->startSection('content'); ?>

    <?php if($r_categories_count): ?>
        <?php echo $__env->make('web.homepage.layouts.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($r_campaigns_count): ?>
        <?php echo $__env->make('web.homepage.layouts.campaign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($r_products_count): ?>
        <?php echo $__env->make('web.homepage.layouts.random', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($n_products_count): ?>
        <?php echo $__env->make('web.homepage.layouts.new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($p_products_count OR $d_products_count): ?>
    <?php echo $__env->make('web.homepage.layouts.tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/homepage/index.blade.php ENDPATH**/ ?>