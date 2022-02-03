
<?php $__env->startSection('title', 'odeme la askldas'); ?>
<?php echo $__env->make('web.checkout.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="inner-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="product-details-frame">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('words.adress'); ?></label>
                                <select class="form-select" id="adress">
                                    <?php $__currentLoopData = Auth::user()->getAllUserAttributeAdresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($a->title); ?>"><?php echo e($a->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label"><?php echo app('translator')->get('words.phone_number'); ?></label>
                                <select class="form-select" id="phone">
                                    <?php $__currentLoopData = Auth::user()->getAllUserAttributePhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($p->title); ?>"><?php echo e($p->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                            <div class="col-lg-12 mt-4">
                                <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="coupon" placeholder="<?php echo app('translator')->get('words.discount_coupon'); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="details-action-group">
                                        <a class="details-wish wish custom-cursor-pointer" id="go-to-coupon">
                                            <i class="icofont-arrow-left"></i>
                                            <span><?php echo app('translator')->get('words.coupon_save'); ?></span>
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        <div class="details-action-group mt-4">
                            <a class="details-wish wish w-100 custom-cursor-pointer" id="go-to-payment">
                                <i class="icofont-arrow-right"></i>
                                <span><?php echo app('translator')->get('words.go_to_payment', ['price'=>getMoneyOrderShoppingCart(Cart::subtotal())]); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/checkout/index.blade.php ENDPATH**/ ?>