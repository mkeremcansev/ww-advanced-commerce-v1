@section('script')
    <script>
            function reviewStatus(id){
                $.ajax({
                    method: 'POST',
                    url: '{{ route("panel.review.status.update") }}',
                    data: {id:id},
                    dataType: 'json'
                })
            }
    </script>
@endsection