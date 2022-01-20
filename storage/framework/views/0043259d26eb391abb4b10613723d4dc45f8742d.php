<?php $__env->startComponent('mail::message'); ?>

<?php $__currentLoopData = $introLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
# <?php echo e($line); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $outroLines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($line); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(isset($actionText)): ?>
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
<?php $__env->startComponent('mail::button', ['url' => $actionUrl, 'color' => $color]); ?>
<?php echo e($actionText); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>



<?php if(! empty($salutation)): ?>
<?php echo e($salutation); ?>

<?php else: ?>
<?php echo e(config('app.name')); ?>

<?php endif; ?>


<?php if(isset($actionText)): ?>
<?php $__env->slot('subcopy'); ?>
<?php echo app('translator')->get('words.button_click_error_message_mail', ['button'=>$actionText]); ?>
<span class="break-all">[<?php echo e($displayableActionUrl); ?>](<?php echo e($actionUrl); ?>)</span>
<?php $__env->endSlot(); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH C:\canseworks\eticaretim\resources\views/vendor/notifications/email.blade.php ENDPATH**/ ?>