<?php $__env->startSection('script'); ?>
    <script>
        let go_to_payment = $('#go-to-payment')
        go_to_payment.on('click', function(){
            let adress = $('#adress').val()
            let phone = $('#phone').val()
            $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.checkout.store")); ?>',
                    data: {adress:adress, phone:phone},
                    dataType: 'json',
                    success: function(response){
                            go_to_payment.addClass('custom-disabled')
                            location.href = '<?php echo e(route("web.index")); ?>'
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
                        })
                    }
                })
        })
    </script>
<?php $__env->stopSection(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/checkout/script/script.blade.php ENDPATH**/ ?>