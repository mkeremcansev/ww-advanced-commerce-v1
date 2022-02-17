@section('script')
    <script>
        function orderStatus(id,status){
            $.ajax({
                method: 'POST',
                url: '{{ route("panel.order.status.update") }}',
                data: {id:id, status:status},
                dataType: 'json',
            })
        }
    </script>
@endsection