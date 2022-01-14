@section('script')
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
                    url: '{{ route("web.user.register.store") }}',
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
                            confirmButtonText: '@lang("words.okey")',
                        }).then((result) => {
                            result.isConfirmed ? location.href = '{{ route("web.user.login.index") }}' : location.href = '{{ route("web.user.login.index") }}'
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