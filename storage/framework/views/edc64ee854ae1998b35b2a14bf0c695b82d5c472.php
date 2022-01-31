<section class="suggest-part">
    <div class="container">
        <ul class="suggest-slider slider-arrow">
            <?php $__currentLoopData = Cache::get('r_categories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a class="suggest-card" href="<?php echo e(route('web.category.products.show', $rc->slug)); ?>"><img src="<?php echo e(asset($rc->image)); ?>" alt="<?php echo e($rc->title); ?>">
                        <h5><?php echo e($rc->title); ?> <span><?php echo app('translator')->get('words.category_product_count', ['number'=>$rc->getAllCategoryProducts->count()]); ?></span></h5>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/homepage/layouts/category.blade.php ENDPATH**/ ?>