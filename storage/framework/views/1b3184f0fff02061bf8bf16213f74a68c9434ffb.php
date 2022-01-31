<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            let add_to_register_btn = $('#add-to-register')
            add_to_register_btn.on('click', function(){
                let name = $('#name').val()
                let surname = $('#surname').val()
                let email = $('#email').val()
                let password = $('#password').val()
                let repeat = $('#repeat').val()
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("web.user.register.store")); ?>',
                    data: {
                        name:name,
                        surname:surname,
                        email:email,
                        password:password,
                        repeat:repeat
                        },
                    dataType: 'json',
                    success: function(response){
                        add_to_register_btn.addClass('custom-disabled')
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '<?php echo app('translator')->get("words.okey"); ?>',
                        }).then((result) => {
                            result.isConfirmed ? location.href = '<?php echo e(route("web.user.login.index")); ?>' : location.href = '<?php echo e(route("web.user.login.index")); ?>'
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
<?php $__env->stopSection(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/register/script/script.blade.php ENDPATH**/ ?>