<nav class="navbar-part mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        @foreach ($categories as $c)
                            @if (count($c->getAllCategoriesCollection))
                                <li class="navbar-item dropdown" id="myDropdown">
                                    <a href="{{ route('web.category.products.show', $c->slug) }}" class="navbar-link dropdown-toggle" data-bs-toggle="dropdown">{{ $c->title }} </a>
                                    <ul class="dropdown-menu dropdown-position-list">
                                        @include('web.layouts.menu.category',
                                        ['children'=>$c->getAllCategoriesCollection])</ul>
                                </li>
                            @else
                                <li class="navbar-item"> <a class="navbar-link" href="{{ route('web.category.products.show', $c->slug) }}">{{ $c->title }}</a> </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
