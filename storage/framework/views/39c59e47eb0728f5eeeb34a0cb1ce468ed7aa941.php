<?php $__env->startSection('script'); ?>
    <script>
            function productStatus(id){
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("panel.product.status.update")); ?>',
                    data: {id:id},
                    dataType: 'json'
                })
            }
    </script>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/product/script/script.blade.php ENDPATH**/ ?>