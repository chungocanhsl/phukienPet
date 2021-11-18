<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Pet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{URL::to('/')}}" class="nav-link">Trang chủ</a></li>
                <li class="nav-item active"><a href="{{URL::to('/shop')}}" class="nav-link">Shop</a></li>

                <li class="nav-item cta cta-colored"><a href="{{URL::to('/cart')}}" class="nav-link"><span class="icon-shopping_cart">

                        </span>[{{Session::has('cart') ? Session::get('cart')->totalQty : 0}}]</a></li>

                @if(Session::has('client'))
                    <li class="nav-item active"><a href="{{URL::to('/client_logout')}}" class="nav-link">Đăng xuất</a></li>
                @else
                    <li class="nav-item active"><a href="{{URL::to('/client_login')}}" class="nav-link">Đăng nhập</a></li>

                @endif

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->