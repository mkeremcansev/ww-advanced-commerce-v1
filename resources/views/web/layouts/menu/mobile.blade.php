<div class="mobile-menu">
        <a href="{{ route('web.index') }}" title="Home Page"><i class="fas fa-home"></i><span>@lang('words.homepage')</span>
        </a>
        <button class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>@lang('words.category')</span>
        </button>
        <button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i>
                <span>@lang('words.shopping_cart_main')</span>
                <sup>
                        {{ Cart::instance('cart')->content()->count() }}
                </sup>
        </button>
        <a href="wishlist.html" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>Favorilerim</span>
                <sup>0</sup>
        </a>
        <a href="compare.html" title="Compare List">
                <i class="fas fa-random"></i>
                <span>Karşılaştır</span>
                <sup>0</sup>
        </a>
    </div>