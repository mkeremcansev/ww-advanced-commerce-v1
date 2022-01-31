@section('script')
    <script>
        function destroyUserAttribute(hash) {
                $.ajax({
                    method: 'POST',
                    url: '{{ route("web.account.attribute.destroy") }}',
                    data: {hash:hash},
                    dataType: 'json',
                    success: function(response){
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '@lang("words.okey")',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
                        })
                    }
                })
            }
            function destroyUserReview(hash) {
                $.ajax({
                    method: 'POST',
                    url: '{{ route("web.account.review.destroy") }}',
                    data: {hash:hash},
                    dataType: 'json',
                    success: function(response){
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '@lang("words.okey")',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
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
                    url: '{{ route("web.account.phone.store") }}',
                    data: {phone:phone},
                    dataType: 'json',
                    success: function(response){
                        add_to_user_phone.addClass('custom-disabled')
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '@lang("words.okey")',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
                        })
                    }
                })
            })
            let add_to_user_adress =  $('#add-to-user-adress')
            add_to_user_adress.on('click', function(){
                let adress = $('#adress').val()
                $.ajax({
                    method: 'POST',
                    url: '{{ route("web.account.adress.store") }}',
                    data: {adress:adress},
                    dataType: 'json',
                    success: function(response){
                        add_to_user_adress.addClass('custom-disabled')
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '@lang("words.okey")',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
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
                    url: '{{ route("web.account.password.change.update") }}',
                    data: {password:password, repeat:repeat},
                    dataType: 'json',
                    success: function(response){
                        change_to_password_btn.addClass('custom-disabled')
                        Swal.fire({
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: '@lang("words.okey")',
                        }).then((result) => {
                            result.isConfirmed ? location.reload() : location.reload()
                        })
                    },
                    error: function(response){
                        Swal.fire({
                            text: getValidateMessage(response),
                            icon: 'error',
                            confirmButtonText: '@lang("words.okey")'
                        })
                    }
                })
            })
        })
    </script>
@endsection