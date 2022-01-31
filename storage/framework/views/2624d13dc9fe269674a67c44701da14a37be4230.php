<?php $__env->startSection('script'); ?>
    <script>
        function destroyUserAttribute(hash) {
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.account.attribute.destroy")); ?>',
                    data: {hash:hash},
                    dataType: 'json',
                    success: function(response){
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
                        })
                    }
                })
            }
            function destroyUserReview(hash) {
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.account.review.destroy")); ?>',
                    data: {hash:hash},
                    dataType: 'json',
                    success: function(response){
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>'
                        })
                    }
                })
            }
        $(document).ready(function(){
            let add_to_user_phone =  $('#add-to-user-phone')
            add_to_user_phone.on('click', function(){
                let phone = $('#phone').val()
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.account.phone.store")); ?>',
                    data: {phone:phone},
                    dataType: 'json',
                    success: function(response){
                        add_to_user_phone.addClass('custom-disabled')
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
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
            let add_to_user_adress =  $('#add-to-user-adress')
            add_to_user_adress.on('click', function(){
                let adress = $('#adress').val()
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.account.adress.store")); ?>',
                    data: {adress:adress},
                    dataType: 'json',
                    success: function(response){
                        add_to_user_adress.addClass('custom-disabled')
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
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
            let change_to_password_btn = $('#change-to-password')
            change_to_password_btn.on('click', function(){
                let password = $('#password').val()
                let repeat = $('#repeat').val()
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.account.password.change.update")); ?>',
                    data: {password:password, repeat:repeat},
                    dataType: 'json',
                    success: function(response){
                        change_to_password_btn.addClass('custom-disabled')
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
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
        })
    </script>
<?php $__env->stopSection(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/account/script/script.blade.php ENDPATH**/ ?>