@foreach ($children as $item)
    @if (count($item->getAllCategoriesCollection))
        <li>
            <a class="dropdown-item" href="#">{{ $item->title }}
                <i class="fas fa-caret-right fa-sm custom-float-right custom-mt-1"></i>
            </a>
            <ul class="submenu dropdown-menu">
                @include('web.layouts.menu.category', ['children'=>$item->getAllCategoriesCollection])
            </ul>
        </li>
    @else
        <li> <a class="dropdown-item" href="#"> {{ $item->title }} </a></li>
    @endif
@endforeach
