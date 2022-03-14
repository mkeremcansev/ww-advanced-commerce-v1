<?php $__env->startSection('script'); ?>
    <script>
        function orderStatus(id,status){
            $.ajax({
                method: 'POST',
                url: '<?php echo e(route("panel.order.status.update")); ?>',
                data: {id:id, status:status},
                dataType: 'json',
            })
        }
    </script>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/order/script/script.blade.php ENDPATH**/ ?>