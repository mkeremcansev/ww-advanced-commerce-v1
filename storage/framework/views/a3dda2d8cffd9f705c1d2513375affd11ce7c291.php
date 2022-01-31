<section class="section newitem-part">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="new-slider slider-arrow">
                    <?php $__currentLoopData = Cache::get('n_products'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($product = $n->getOneProductAttributes); ?>
                    <li>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label p-2">
                                    <?php $__currentLoopData = getProductLabel($product->discount, $product->price, $product->created_at, $n->getAllProductReviews->avg('rating')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($l['status']): ?>
                                            <label class="label-text <?php echo e($l['code']); ?>"><?php echo e($l['title'].$l['value']); ?></label>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <a class="product-image" href="<?php echo e(route('web.product.show', $product->slug)); ?>">
                                    <img src="<?php echo e(asset($n->getOneProductImages->image)); ?>" class="rounded-3" alt="<?php echo e($product->title); ?>">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <i class="<?php if(round((float)$n->getAllProductReviews->avg('rating')) >= $i): ?> active <?php endif; ?>  icofont-star"></i>
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
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</section><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/homepage/layouts/new.blade.php ENDPATH**/ ?>