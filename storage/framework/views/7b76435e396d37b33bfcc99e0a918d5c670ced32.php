<?php if($m = Session::get('success')): ?>
    <script>
        Swal.fire({
            text: '<?php echo e($m); ?>',
            icon: 'success',
            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
        })
    </script>
<?php elseif($m = Session::get('error')): ?>
    <script>
            Swal.fire({
                text: '<?php echo e($m); ?>',
                icon: 'error',
                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
            })
    </script>
<?php elseif($m = Session::get('status')): ?>
    <script>
            Swal.fire({
                text: '<?php echo e($m); ?>',
                icon: 'success',
                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
            })
    </script>
<?php endif; ?>
<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            Swal.fire({
                text: '<?php echo e($error); ?>',
                icon: 'error',
                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
            })
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/layouts/alert.blade.php ENDPATH**/ ?>