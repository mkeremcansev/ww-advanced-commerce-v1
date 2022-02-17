
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.order_detail'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.order.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <div class="col-xl-8 col-md-8 col-12">
                            <div class="card invoice-preview-card">
                                <div class="card-body invoice-padding pb-0">
                                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                        <div>
                                            <div class="logo-wrapper">
                                                <img src="<?php echo e(asset(setting('logo'))); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="mt-md-0 mt-2">
                                            <h4 class="invoice-title"><?php echo app('translator')->get('words.order_number', ['number'=>$order->id]); ?></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-xl-8 p-0">
                                            <h6 class="mb-25"><?php echo e(setting('title')); ?></h6>
                                            <p class="card-text mb-25"><?php echo e(setting('adress')); ?></p>
                                            <p class="card-text mb-0"><?php echo e(setting('phone')); ?></p>
                                        </div>
                                        <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                            <h6 class="mb-25"><?php echo app('translator')->get('words.name_surname', ['name'=>$order->getOneUsers->name, 'surname'=>$order->getOneUsers->surname]); ?></h6>
                                            <p class="card-text mb-25"><?php echo e($order->adress); ?></p>
                                            <p class="card-text mb-25"><?php echo e($order->phone); ?></p>
                                            <p class="card-text mb-0"><?php echo e($order->getOneUsers->email); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address and Contact ends -->

                                <!-- Invoice Description starts -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="py-1"><?php echo app('translator')->get('words.product_name'); ?></th>
                                                <th class="py-1"><?php echo app('translator')->get('words.variation'); ?></th>
                                                <th class="py-1"><?php echo app('translator')->get('words.quantity'); ?></th>
                                                <th class="py-1"><?php echo app('translator')->get('words.price'); ?></th>
                                                <th class="py-1"><?php echo app('translator')->get('words.total_price'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $order->getAllOrderAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="<?php if($loop->last): ?> border-bottom <?php endif; ?>">
                                                    <td class="py-1">
                                                        <p class="card-text text-nowrap"><?php echo e($a->product); ?></p>
                                                    </td>
                                                    <td class="py-1">
                                                        <?php $__currentLoopData = $a->variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <p class="card-text text-nowrap"><?php echo e($v->title); ?></p>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
                                                    <td class="py-1">
                                                        <span class="font-weight-bold"><?php echo e($a->quantity); ?></span>
                                                    </td>
                                                    <td class="py-1">
                                                        <span class="font-weight-bold"><?php echo e(getMoneyOrder($a->price)); ?></span>
                                                    </td>
                                                    <td class="py-1">
                                                        <span class="font-weight-bold"><?php echo e(getMoneyOrder($a->total)); ?></span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center"><?php echo app('translator')->get('words.total_price'); ?></h4>
                                    <p class="text-center"><?php echo e(getMoneyOrder($order->total)); ?></p>
                                    <select class="form-control" onchange="orderStatus(<?php echo e($order->id); ?>, this.value)">
                                        <option value="0" <?php if($order->status == 0): ?> selected <?php endif; ?>><?php echo app('translator')->get('words.order_saved'); ?></option>
                                        <option value="1" <?php if($order->status == 1): ?> selected <?php endif; ?>><?php echo app('translator')->get('words.order_prepared'); ?></option>
                                        <option value="2" <?php if($order->status == 2): ?> selected <?php endif; ?>><?php echo app('translator')->get('words.order_shepped'); ?></option>
                                        <option value="3" <?php if($order->status == 3): ?> selected <?php endif; ?>><?php echo app('translator')->get('words.order_delivered'); ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/order/detail/index.blade.php ENDPATH**/ ?>