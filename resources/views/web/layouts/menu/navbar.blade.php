<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        @foreach ($categories as $category)
                            @if (count($category->getAllCategoriesCollection))
                                <li class="navbar-item dropdown" id="myDropdown">
                                    <a class="navbar-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">{{ $category->title }} </a>
                                    <ul class="dropdown-menu dropdown-position-list">
                                        @include('web.layouts.menu.category',
                                        ['children'=>$category->getAllCategoriesCollection])</ul>
                                </li>
                            @else
                                <li class="navbar-item"> <a class="navbar-link"
                                        href="#">{{ $category->title }}</a> </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
