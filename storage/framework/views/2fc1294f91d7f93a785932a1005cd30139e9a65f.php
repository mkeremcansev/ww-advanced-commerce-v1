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
                        if(response.status == 201){
                            Swal.fire({
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
                            })
                        } else if(response.status == 200){
                            go_to_payment.addClass('custom-disabled')
                            location.href = '<?php echo e(route("web.index")); ?>'
                        }
                        else if(response.status == 202){
                            Swal.fire({
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
                            }).then((result) => {
                                result.isConfirmed ? location.reload() : location.reload()
                            })
                        }
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

        let go_to_coupon = $('#go-to-coupon')
        go_to_coupon.on('click', function(){
            let code = $('#code').val()
            $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.coupon.store")); ?>',
                    data: {code:code},
                    dataType: 'json',
                    success: function(response){
                        if(response.status == 200){
                            Swal.fire({
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                            }).then((result) => {
                                result.isConfirmed ? location.reload() : location.reload()
                            })
                        } else if(response.status == 201){
                            Swal.fire({
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                            })
                        }
                        
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
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/checkout/script/script.blade.php ENDPATH**/ ?>