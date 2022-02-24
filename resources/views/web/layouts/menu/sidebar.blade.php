<aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>@lang('words.category_list')</span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item">
                @foreach ($categories as $c)
                    <li class="category-item">
                        <a class="category-link" href="{{ route('web.category.products.show', $c->slug) }}">
                            <span>{{ $c->title }}</span>
                        </a>
                    </li>
                @endforeach
            </li>
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">Canseworks</a></p>
        </div>
    </aside>