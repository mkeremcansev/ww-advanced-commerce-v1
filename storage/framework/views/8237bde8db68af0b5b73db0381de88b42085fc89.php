<form action="<?php echo e(route('web.shopping.cart.update')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total">
                <i class="fas fa-shopping-basket"></i>
                <span><?php echo app('translator')->get('words.shopping_cart', ['count'=>Cart::instance('cart')->content()->count()]); ?></span>
            </div>
            <button type="button" class="cart-close">
                <i class="icofont-close"></i>
            </button>
        </div>
            <ul class="cart-list">
                <?php if(Cart::instance('cart')->content()->count()): ?>
                    <?php $__currentLoopData = Cart::instance('cart')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($product = $c->model); ?>
                    <?php ($attribute = $product->getOneProductAttributes); ?>
                    <li class="cart-item">
                        <div class="cart-media">
                            <a>
                                <img src="<?php echo e(asset($product->getOneProductImages->image)); ?>" alt="<?php echo e($attribute->title); ?>">
                            </a>
                            <button type="button" class="cart-delete">
                                <a href="<?php echo e(route('web.shopping.cart.delete', $c->rowId)); ?>">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </button>
                        </div>
                        <div class="cart-info-group">
                            <div class="cart-info">
                                <h6><a href="<?php echo e(route('web.product.show', $attribute->slug)); ?>"><?php echo e($attribute->title); ?></a></h6>
                                <?php $__currentLoopData = $c->options['variants']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><strong><?php echo e($o->getOneVariantMain->title); ?> : </strong><?php echo e($o->title); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="cart-action-group">
                                <div class="product-action">
                                    <button type="button" class="action-minus">
                                        <i class="icofont-minus"></i>
                                    </button>
                                    <input type="hidden" name="rowId[]" value="<?php echo e($c->rowId); ?>">
                                    <input class="action-input" type="text" name="quantity[]" value="<?php echo e($c->qty); ?>">
                                    <button type="button" class="action-plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                                <h6><?php echo e(getMoneyOrder($c->price * $c->qty)); ?></h6>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="mt-5">
                        <h5 class="text-center"><?php echo app('translator')->get('words.shopping_cart_empty'); ?></h5>
                    </div>
                <?php endif; ?>
            </ul>
        <?php if(Cart::instance('cart')->content()->count()): ?>
            <div class="cart-footer">
                <div class="mb-1">
                    <button class="clear-and-update-btn col-lg-3"><?php echo app('translator')->get('words.shopping_cart_update'); ?></button>
                    <a href="<?php echo e(route('web.shopping.cart.destroy')); ?>" class="clear-and-update-btn"><?php echo app('translator')->get('words.shopping_cart_clear'); ?></a>
                </div>
                <a class="checkout-and-go-btn" href="">
                    <span class="checkout-label"><?php echo app('translator')->get('words.go_to_pay', ['price'=>getMoneyOrderShoppingCart(Cart::subtotal())]); ?></span>
                </a>
            </div>
        <?php else: ?>
            <div class="cart-footer mt-5">
                <a class="checkout-and-go-btn" href="<?php echo e(route('web.index')); ?>">
                    <span class="checkout-label"><?php echo app('translator')->get('words.go_to_shopping'); ?></span>
                </a>
            </div>
        <?php endif; ?>
    </aside>
</form><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/layouts/menu/cart.blade.php ENDPATH**/ ?>