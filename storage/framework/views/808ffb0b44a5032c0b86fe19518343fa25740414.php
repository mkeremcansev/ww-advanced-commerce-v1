<?php $__env->startComponent('mail::message'); ?>
<?php echo $__env->make('vendor.notifications.style.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

# <?php echo app('translator')->get('words.hello_name', ['name'=>$user->name]); ?>


<ul class="order_ul_tag">
    <?php $__currentLoopData = orderAccountStatus($order->status); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="order_email_notification <?php if($s['status']): ?> order_updated_check_color <?php endif; ?> " >
            <span><?php echo app('translator')->get('words.check_icon'); ?></span>
            <span><?php echo e($s['text']); ?></span>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>



# <?php echo app('translator')->get('words.order_total', ['number'=>$order->id ,'price'=>getMoneyOrder($order->total)]); ?>

<ul>
    <?php $__currentLoopData = $order->getAllOrderAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo app('translator')->get('words.order_product_list', ['product'=>$p->product, 'quantity'=>$p->quantity, 'text'=>__('words.quantity'),'price'=>getMoneyOrder($p->price), 'total'=>getMoneyOrder($p->total)]); ?>
            <ul>
                <?php $__currentLoopData = $p->variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <span>
                            <?php echo app('translator')->get('words.get_variant_main',['variant'=> $v->get_one_variant_main->title]); ?>
                            <?php echo e($v->title); ?>

                        </span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->startComponent('mail::button', ['url' => route('web.index')]); ?>
    <?php echo app('translator')->get('words.resume_to_shopping'); ?>
<?php echo $__env->renderComponent(); ?>


<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/vendor/notifications/order/update.blade.php ENDPATH**/ ?>