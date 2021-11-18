<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Trang dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Thêm</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/addcategory')}}">Thêm danh mục</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/addproduct')}}">Thêm sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/addslider')}}">Thêm slider</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="ti-layout menu-icon"></i>
                <span class="menu-title">Xem</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/categories')}}">Danh mục</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/products')}}">Sản phẩm</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/sliders')}}">Slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/orders')}}">Đơn đặt hàng</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>