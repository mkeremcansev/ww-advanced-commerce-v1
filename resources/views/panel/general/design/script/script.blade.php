@section('script')
    <script src="{{ asset('panel/app-assets/js/scripts/extensions/ext-component-drag-drop.js') }}"></script>
    <script src="{{ asset('panel') }}/app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script>
        $(document).ready(function(){
            let array = []
            const list = $('#handle-list-2')
            $('#design_btn').on('click', function(){
                for (let i = 0; i < list[0].children.length; i++) {
                    array.push({number:list[0].children[i].attributes[2].value, title:list[0].children[i].attributes[1].value})
                } 
                $.ajax({
                    method: 'POST',
                    url: '{{ route("panel.design.update") }}',
                    data: {design:array},
                    dataType: 'json',
                    success:function(response){
                        location.reload()
                    },
                    error:function(response){
                        console.log(response)
                    }
                })
            })
        })
    </script>
@endsection