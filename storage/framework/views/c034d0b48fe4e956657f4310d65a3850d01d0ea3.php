<section class="section recent-part">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            <?php $__currentLoopData = Cache::get('r_products'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($product = $r->getOneProductAttributes); ?>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label p-2">
                                <?php $__currentLoopData = getProductLabel($product->discount, $product->price, $r->created_at, $r->getAllProductReviews->avg('rating')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($l['status']): ?>
                                        <label class="label-text <?php echo e($l['code']); ?>"><?php echo e($l['title'].$l['value']); ?></label>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a class="product-image" href="<?php echo e(route('web.product.show', $product->slug)); ?>">
                                <img src="<?php echo e(asset($r->getOneProductImages->image)); ?>" class="rounded-3" alt="<?php echo e($product->title); ?>">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-rating">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <i class="<?php if(round((float)$r->getAllProductReviews->avg('rating')) >= $i): ?> active <?php endif; ?>  icofont-star"></i>
                                <?php endfor; ?>
                            </div>
                            <h6 class="product-name">
                                <a href="<?php echo e(route('web.product.show', $product->slug)); ?>"><?php echo e($product->title); ?></a>
                            </h6>
                            <h6 class="product-price">
                            <?php if($product->discount): ?>
                                <del><?php echo e(getMoneyOrder($product->price)); ?></del>
                                <span><?php echo e(getMoneyOrder($product->discount)); ?></span>
                            <?php else: ?>
                                <span><?php echo e(getMoneyOrder($product->price)); ?></span>
                            <?php endif; ?>
                            </h6>
                            <a href="<?php echo e(route('web.product.show', $product->slug)); ?>" class="product-add" title="<?php echo app('translator')->get('words.detail'); ?>">
                                <i class="fas fa-search"></i>
                                <span><?php echo app('translator')->get('words.detail'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/homepage/layouts/random.blade.php ENDPATH**/ ?>