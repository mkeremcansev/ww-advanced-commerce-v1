@section('script')
    <script>
        let go_to_payment = $('#go-to-payment')
        go_to_payment.on('click', function(){
            let adress = $('#adress').val()
            let phone = $('#phone').val()
            $.ajax({
                    method: 'POST',
                    url: '{{ route("web.checkout.store") }}',
                    data: {adress:adress, phone:phone},
                    dataType: 'json',
                    success: function(response){
                            go_to_payment.addClass('custom-disabled')
                            location.href = '{{ route("web.index") }}'
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
    </script>
@endsection