<nav class="navbar-part mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(count($c->getAllCategoriesCollection)): ?>
                                <li class="navbar-item dropdown" id="myDropdown">
                                    <a href="<?php echo e(route('web.category.products.show', $c->slug)); ?>" class="navbar-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo e($c->title); ?> </a>
                                    <ul class="dropdown-menu dropdown-position-list">
                                        <?php echo $__env->make('web.layouts.menu.category',
                                        ['children'=>$c->getAllCategoriesCollection], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></ul>
                                </li>
                            <?php else: ?>
                                <li class="navbar-item"> <a class="navbar-link" href="<?php echo e(route('web.category.products.show', $c->slug)); ?>"><?php echo e($c->title); ?></a> </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/menu/navbar.blade.php ENDPATH**/ ?>