
<?php $__env->startSection('title', 'asdasdas'); ?>
<?php $__env->startSection('content'); ?>
<section class="inner-section orderlist-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php $__currentLoopData = Auth::user()->getAllUserOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5><?php echo app('translator')->get('words.order_number', ['number'=>$o->id]); ?></h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <?php $__currentLoopData = orderAccountStatus($o->status); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="order-track-item <?php if($s['status']): ?> active <?php endif; ?>">
                                                    <i class="icofont-check"></i>
                                                    <span><?php echo e($s['text']); ?></span>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6><?php echo app('translator')->get('words.order_number_1'); ?></h6>
                                            <p><?php echo e($o->id); ?></p>
                                        </li>
                                        <li>
                                            <h6><?php echo app('translator')->get('words.total_price'); ?></h6>
                                            <p><?php echo e(getMoneyOrder($o->total)); ?></p>
                                        </li>
                                        <li>
                                            <h6><?php echo app('translator')->get('words.order_date'); ?></h6>
                                            <p><?php echo e($o->created_at->format('d.m.Y')); ?></p>
                                        </li>
                                        <li>
                                            <h6><?php echo app('translator')->get('words.order_adress'); ?></h6>
                                            <p><?php echo e($o->adress); ?></p>
                                        </li>
                                        <li>
                                            <h6><?php echo app('translator')->get('words.order_phone'); ?></h6>
                                            <p><?php echo e($o->phone); ?></p>
                                        </li>
                                    </ul>
                                </div>
                                <?php $__currentLoopData = $o->getAllOrderAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-6">
                                        <ul class="orderlist-details">
                                            <li>
                                                <h6><?php echo app('translator')->get('words.product_name'); ?></h6>
                                                <p><?php echo e($a->product); ?></p>
                                            </li>
                                            <li>
                                                <h6><?php echo app('translator')->get('words.quantity'); ?></h6>
                                                <p><?php echo e($a->quantity); ?></p>
                                            </li>
                                            <li>
                                                <h6><?php echo app('translator')->get('words.price'); ?></h6>
                                                <p><?php echo e(getMoneyOrder($a->price)); ?></p>
                                            </li>
                                            <li>
                                                <h6><?php echo app('translator')->get('words.total_price'); ?></h6>
                                                <p><?php echo e(getMoneyOrder($a->total)); ?></p>
                                            </li>
                                            <?php $__currentLoopData = $a->variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <h6><?php echo e($v->get_one_variant_main->title); ?></h6>
                                                <p><?php echo e($v->title); ?></p>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/account/order/index.blade.php ENDPATH**/ ?>