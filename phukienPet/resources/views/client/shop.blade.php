@extends('layouts.app1')
@section('title')
   Shop
@endsection

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('/frontend/images/anh2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Sản phẩm xinh xẻo dành cho Pet iu <3</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="{{URL::to('/shop')}}" class="{{(request()->is('shop') ? 'active' : '')}}">Tất cả</a></li>
                    @foreach($categories as $category)
                         <li><a href="/view_by_cate/{{$category->category_name}}" class="{{(request()->is('view_by_cate/'.$category->category_name) ? 'active' : '')}}">{{$category->category_name}}</a></li>
                   @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="/storage/product_images/{{$product->product_image}}" alt="Colorlib Template">

                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$product->product_name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">{{--<span class="mr-2 price-dc">$120.00</span>--}}<span class="price-sale">${{$product->product_price}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="/addToCart/{{$product->id}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li>{{ $products->links() }}</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

    @endsection
