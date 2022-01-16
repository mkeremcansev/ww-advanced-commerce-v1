@foreach ($children as $c)
    @if (count($c->getAllCategoriesCollection))
        <li>
            <a class="dropdown-item" href="{{ route('web.category.products.show', $c->slug) }}">{{ $c->title }}
                <i class="fas fa-caret-right fa-sm custom-float-right custom-mt-1"></i>
            </a>
            <ul class="submenu dropdown-menu">
                @include('web.layouts.menu.category', ['children'=>$c->getAllCategoriesCollection])
            </ul>
        </li>
    @else
        <li> <a class="dropdown-item" href="{{ route('web.category.products.show', $c->slug) }}"> {{ $c->title }} </a></li>
    @endif
@endforeach
