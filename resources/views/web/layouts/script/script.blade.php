<script>
    $(document).ready(function(){
        fetch('https://finans.truncgil.com/v3/today.json').then(function(response){
            response.json().then((data)=>{
                $('.usd').text('@lang("words.usd", ["price"=>"'+data.USD.Selling+'", "currency_unit"=>__("words.currency_unit")])')
                $('.eur').text('@lang("words.eur", ["price"=>"'+data.EUR.Selling+'", "currency_unit"=>__("words.currency_unit")])')
            })
        }).catch(function(){
            $('.usd').text('@lang("words.not_have_data")')
            $('.eur').text('@lang("words.not_have_data")')
        })
    })
    $('.simple-marquee-container').SimpleMarquee();
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
                    return $.get("{{ route('web.search.auto') }}", {
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
            @foreach ($categories as $r)
                "{{ $r->title }}".replace(/&amp;/g, '&'),
            @endforeach
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
</script>