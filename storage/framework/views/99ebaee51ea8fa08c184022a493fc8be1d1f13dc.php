<div class="mobile-menu">
        <a href="<?php echo e(route('web.index')); ?>" title="Home Page"><i class="fas fa-home"></i><span><?php echo app('translator')->get('words.homepage'); ?></span>
        </a>
        <button class="cate-btn" title="Category List"><i class="fas fa-list"></i><span><?php echo app('translator')->get('words.category'); ?></span>
        </button>
        <button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i>
                <span><?php echo app('translator')->get('words.shopping_cart_main'); ?></span>
                <sup>
                        <?php echo e(Cart::instance('cart')->content()->count()); ?>

                </sup>
        </button>
        <button class="wishlist-btn" title="Cartlist">
                <i class="fas fa-heart"></i>
                <span><?php echo app('translator')->get('words.wishlist'); ?></span>
                <sup>
                        <?php echo e(Cart::instance('wishlist')->content()->count()); ?>

                </sup>
        </button>
        <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('web.account.logout.store')); ?>">
                        <i class="fa fa-sign-out-alt"></i>
                        <span><?php echo app('translator')->get('words.logout'); ?></span>
                </a>
        <?php else: ?>
                <a href="<?php echo e(route('web.user.login.index')); ?>">
                        <i class="fa fa-user"></i>
                        <span><?php echo app('translator')->get('words.login'); ?></span>
                </a>
        <?php endif; ?>
        
    </div><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/layouts/menu/mobile.blade.php ENDPATH**/ ?>