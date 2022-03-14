<?php $__env->startSection('script'); ?>
    <script>
            function reviewStatus(id){
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("panel.review.status.update")); ?>',
                    data: {id:id},
                    dataType: 'json'
                })
            }
    </script>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/review/script/script.blade.php ENDPATH**/ ?>