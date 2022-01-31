@section('script')
    <script>
            function productStatus(id){
                $.ajax({
                    method: 'POST',
                    url: '{{ route("panel.product.status.update") }}',
                    data: {id:id},
                    dataType: 'json'
                })
            }
    </script>
@endsection