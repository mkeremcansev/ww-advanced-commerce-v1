<aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span><?php echo app('translator')->get('words.category_list'); ?></span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="category-item">
                        <a class="category-link" href="<?php echo e(route('web.category.products.show', $c->slug)); ?>">
                            <span><?php echo e($c->title); ?></span>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </li>
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">canseworks</a></p>
        </div>
    </aside><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/menu/sidebar.blade.php ENDPATH**/ ?>