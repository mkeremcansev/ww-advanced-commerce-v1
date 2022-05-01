<script>
    tinymce.init({
        selector: 'textarea#tiny',
        language: 'tr_TR',
        height: 600,
        object_resizing : 'img',
        image_class_list: [
        {title: 'Responsive Image', value: 'cw-img-responsive'},
        ],
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

        image_title: true,
        relative_urls : false,
        remove_script_host : false,
        convert_urls : true,
        automatic_uploads: true,
        images_upload_url: '{{ route("panel.text.image.store") }}',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });
    $(document).ready(function(){
        $('#title_h').text('{{ setting("title") }} - '+$('#seo_title').val())
        $('#description_p').text($('#seo_description').val())
        $('#seo_title').on('keyup', function(){
            $('#title_h').text('{{ setting("title") }} - '+$('#seo_title').val())
        })
        $('#seo_description').on('keyup', function(){
            $('#description_p').text($('#seo_description').val())
        })
    })
</script>