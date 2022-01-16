@if ($m = Session::get('success'))
    <script>
        Swal.fire({
            text: '{{ $m }}',
            icon: 'success',
            confirmButtonText: '@lang("words.okey")'
        })
    </script>
@elseif($m = Session::get('error'))
    <script>
            Swal.fire({
                text: '{{ $m }}',
                icon: 'error',
                confirmButtonText: '@lang("words.okey")'
            })
    </script>
@endif
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <script>
            Swal.fire({
                text: '{{ $error }}',
                icon: 'error',
                confirmButtonText: '@lang("words.okey")'
            })
        </script>
    @endforeach
@endif