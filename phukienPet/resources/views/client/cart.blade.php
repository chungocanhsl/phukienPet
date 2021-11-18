@extends('layouts.app1')
@section('title')
    Cart
    @endsection

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/anh3.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Giỏ hàng</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá thành</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(Session::has('cart'))

                            @foreach($products as $product)
                                <tr class="text-center">
                                    <td class="product-remove"><a href="/removeitem/{{$product['product_id']}}"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod"><div class="img" style="background-image:url(/storage/product_images/{{$product['product_image']}});"></div></td>

                                    <td class="product-name">
                                        <h3>{{$product['product_name']}}</h3>
                                        <p>{{$product['product_description']}}</p>
                                    </td>i

                                    <td class="price">${{$product['product_price']}}</td>
                                    {!! Form::open(['action' => 'ClientController@updateqty',
                                        'method' =>'post']) !!}
                                     {{csrf_field()}}
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="number" name="quantity" class="quantity form-control input-number" value="{{$product['qty']}}" min="1" max="100">
                                                <input type="hidden" name="id" class="quantity form-control input-number" value="{{$product['product_id']}}" min="1" max="100">
                                            </div>
                                            {{Form::submit('Cập nhật',['class' => 'btn btn-success'])}}

                                            {!! Form::close() !!}


                                    </td>

                                    <td class="total">${{$product['product_price'] * $product['qty']}}</td>
                                </tr><!-- END TR-->

                            @endforeach

                        @else
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Nhập mã giảm giá</h3>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Mã giảm giá</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Click</a></p>
            </div>

            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Tổng tiền hàng</h3>

                    <p class="d-flex">
                        <span>Mã free ship</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Mã giảm giá</span>
                        <span>$0.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Tổng tiền</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p><a href="/checkout" class="btn btn-primary py-3 px-4">Đặt hàng</a></p>
            </div>
        </div>
    </div>
</section>

@endsection




@section('scripts')
<script>
    $(document).ready(function(){

        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>

@endsection