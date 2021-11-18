@extends('layouts.app1')
@section('title')
    Home
@endsection

@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">

        @foreach($sliders as $slider)
        <div class="slider-item" style="background-image: url(/storage/slider_images/{{$slider->slider_image}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">{{$slider->description1}}</h1>
                        <h2 class="subheading mb-4">{{$slider->description2}}</h2>
                        <p><a href="#" class="btn btn-primary">View Details</a></p>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Miễn phí ship</h3>
                        <span>Với đơn hàng từ 300.000VND</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Sản phẩm tốt</h3>
                        <span>Giá cả phải chăng</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Chất lượng cao</h3>
                        <span>Chất lượng được đặt lên hàng đầu</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Hỗ trợ</h3>
                        <span>Hỗ trợ 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(/frontend/frontend/images/chuongcho1.jpg);">
                            <div class="text text-center">
                                <h2>Pet-Okela</h2>
                                <p>Rất nhiều sản phẩm xinh xẻo</p>
                                <p><a href="{{url('/shop')}}" class="btn btn-primary">Xem shop</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(/frontend/images/anhs2.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Chất lượng</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(/frontend/images/anhs3.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Xinh xẻo</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(/frontend/images/anhs4.png);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Cho người bạn tốt nhất</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(/frontend/images/anhs5.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Dành mọi sự yêu thương</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section"></section>

<section class="ftco-section img" style="background-image: url(/frontend/images/anh4.png);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">Giá tốt nhất cho bạn</span>
                <h2 class="mb-4">Bạn và cún của bạn sẽ rất hài lòng với sản phẩm của chúng tôi</h2>
                <p>Các bạn cún sẽ rất thích</p>
                <span class="price">$10 <a href="#">now $5 only</a></span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Phản hồi của khách hàng</span>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(/frontend/images/anhs2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Bạn nhỏ của tôi rất thích sản phẩm này</p>
                                <p class="name">Garreth Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(/frontend/images/anhs3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Bạn nhỏ của tôi rất thích sản phẩm này</p>
                                <p class="name">Garreth Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(/frontend/images/anhs4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Bạn nhỏ của tôi rất thích sản phẩm này</p>
                                <p class="name">Garreth Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(/frontend/images/anhs5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Bạn nhỏ của tôi rất thích sản phẩm này</p>
                                <p class="name">Garreth Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(/frontend/images/anhs3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Bạn nhỏ của tôi rất thích sản phẩm này</p>
                                <p class="name">Garreth Smith</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="ftco-section ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="frontend/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="frontend/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="frontend/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="frontend/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="frontend/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
        </div>
    </div>
</section>

@endsection