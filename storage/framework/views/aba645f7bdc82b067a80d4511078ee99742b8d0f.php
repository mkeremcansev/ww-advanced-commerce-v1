<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(count($c->getAllCategoriesCollection)): ?>
        <li>
            <a class="dropdown-item" href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"><?php echo e($c->title); ?>

                <i class="fas fa-caret-right fa-sm custom-float-right custom-mt-1"></i>
            </a>
            <ul class="submenu dropdown-menu">
                <?php echo $__env->make('web.layouts.menu.category', ['children'=>$c->getAllCategoriesCollection], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </li>
    <?php else: ?>
        <li> <a class="dropdown-item" href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"> <?php echo e($c->title); ?> </a></li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/menu/category.blade.php ENDPATH**/ ?>