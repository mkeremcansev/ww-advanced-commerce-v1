   <script>
    $('#shopping_modal_button').on('click', function(){
        localStorage.setItem('shopping_modal', true)
    })
    $(window).on('load', function() {
        if(localStorage.getItem('shopping_modal')){
            $('#shopping_modal').modal('hide');
        } else {
            $('#shopping_modal').modal('show');
        }
    });
       $('#search_input_typing').on('keyup', function(){
            $('#search_input_typing').typeahead({
                source: function (search, process) {
                    return $.get("<?php echo e(route('web.search.auto')); ?>", {
                        search: search
                    }, function (data) {
                        let products = []
                        for(var i = 0; i < data.length; i++){
                            products.push(data[i].get_one_product_attributes.title)
                        }
                        return process(products);
                        
                    });
                }
            });
       })
        let words = [
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                "<?php echo e($r->title); ?>".replace(/&amp;/g, '&'),
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ];
        let i = 0;
        let timer;

        function typingEffect() {
        let word = words[i].split("");
        const loopTyping = function() {
            if (word.length > 0) {
            let text = document.getElementById('search_input_typing');
            text.setAttribute('placeholder', text.getAttribute('placeholder') + word.shift());
            } else {
                setTimeout(function(){
                    deletingEffect();
                }, 1500)
            
            return false;
            };
            timer = setTimeout(loopTyping, 50);
        };
        loopTyping();
        };

        function deletingEffect() {
        let word = words[i].split("");
        var loopDeleting = function() {
            if (word.length > 0) {
            word.pop();
            document.getElementById('search_input_typing').setAttribute('placeholder', word.join(""));
            } else {
            if (words.length > (i + 1)) {
                i++;
            } else {
                i = 0;
            };
            typingEffect();
                return false;
            };
            timer = setTimeout(loopDeleting, 50);
        };
        loopDeleting();
        };
        typingEffect();
   </script><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/script/script.blade.php ENDPATH**/ ?>