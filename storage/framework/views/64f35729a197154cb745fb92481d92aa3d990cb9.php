<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            let add_to_login_btn = $('#add-to-login')
            add_to_login_btn.on('click', function(){
                let email = $('#email').val()
                let password = $('#password').val()
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.user.login.store")); ?>',
                    data: {email:email, password:password},
                    dataType: 'json',
                    success: function(response){
                         if(response.status == 'error'){
                            Swal.fire({
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                            })
                        } else if(response.status == 'success'){
                            add_to_login_btn.addClass('custom-disabled')
                            Swal.fire({
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                            }).then((result) => {
                                result.isConfirmed ? location.href = '<?php echo e(route("web.account.index")); ?>' : location.href = '<?php echo e(route("web.account.index")); ?>'
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
        })
    </script>
<?php $__env->stopSection(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/login/script/script.blade.php ENDPATH**/ ?>