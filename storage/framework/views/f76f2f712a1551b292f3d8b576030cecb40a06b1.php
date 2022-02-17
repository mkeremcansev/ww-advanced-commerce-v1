<aside class="wishlist-sidebar">
        <div class="cart-header">
            <div class="cart-total">
                <i class="fas fa-shopping-basket"></i>
                <span><?php echo app('translator')->get('words.wishlist_count', ['count'=>Cart::instance('wishlist')->content()->count()]); ?></span>
            </div>
            <button type="button" class="wishlist-close">
                <i class="icofont-close"></i>
            </button>
        </div>
            <ul class="cart-list">
                <?php if(Cart::instance('wishlist')->content()->count()): ?>
                    <?php $__currentLoopData = Cart::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($product = $w->model); ?>
                    <?php ($attribute = $product->getOneProductAttributes); ?>
                    <li class="cart-item">
                        <div class="cart-media">
                            <a>
                                <img src="<?php echo e(asset($product->getOneProductImages->image)); ?>" alt="<?php echo e($attribute->title); ?>">
                            </a>
                            <button type="button" class="cart-delete">
                                <a href="<?php echo e(route('web.wishlist.delete', $w->rowId)); ?>">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </button>
                        </div>
                        <div class="cart-info-group mt-3 custom-mt-0-6">
                            <div class="cart-info">
                                <h6><a href="<?php echo e(route('web.product.show', $attribute->slug)); ?>"><?php echo e($attribute->title); ?></a></h6>
                                <h6 class="main-text-color"><?php echo e(getMoneyOrder($w->price)); ?></h6>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="mt-5">
                    <h5 class="text-center"><?php echo app('translator')->get('words.wishlist_cart_empty'); ?></h5>
                </div>
                <?php endif; ?>
            </ul>
             <?php if(Cart::instance('wishlist')->content()->count()): ?>
                <div class="cart-footer mt-5">
                    <a class="checkout-and-go-btn" href="<?php echo e(route('web.index')); ?>">
                        <span class="checkout-label"><?php echo app('translator')->get('words.resume_to_shopping'); ?></span>
                    </a>
                </div>
            <?php else: ?>
                <div class="cart-footer mt-5">
                    <a class="checkout-and-go-btn" href="<?php echo e(route('web.index')); ?>">
                        <span class="checkout-label"><?php echo app('translator')->get('words.go_to_shopping'); ?></span>
                    </a>
                </div>
            <?php endif; ?>
    </aside><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/menu/wish.blade.php ENDPATH**/ ?>