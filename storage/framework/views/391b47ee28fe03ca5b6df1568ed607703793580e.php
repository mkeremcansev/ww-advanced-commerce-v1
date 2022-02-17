
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.category'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section class="inner-section shop-part">
        <div class="container">
            <?php if($products->count()): ?>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($product = $p->getOneProductAttributes); ?>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label p-2">
                                        <?php $__currentLoopData = getProductLabel($product->discount, $product->price, $product->created_at, $p->getAllProductReviews->avg('rating')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($l['status']): ?>
                                                <label class="label-text <?php echo e($l['code']); ?>"><?php echo e($l['title'].$l['value']); ?></label>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <a class="product-image" href="<?php echo e(route('web.product.show', $product->slug)); ?>">
                                        <img src="<?php echo e(asset($p->getOneProductImages->image)); ?>" class="rounded-3" alt="<?php echo e($product->title); ?>">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <i class="<?php if(round((float)$p->getAllProductReviews->avg('rating')) >= $i): ?> active <?php endif; ?>  icofont-star"></i>
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
            <?php else: ?>
            <div class="row row-cols-12 row-cols-md-12 row-cols-lg-12 row-cols-xl-12">
                <div class="product-card pb-5 pt-5 mt-5">
                        <h5 class="text-center"><?php echo app('translator')->get('words.category_not_have_product'); ?></h5>
                    </div>
            </div>
            <?php endif; ?>
             <?php echo e($products->links('vendor.pagination.pagination')); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/products/category/index.blade.php ENDPATH**/ ?>