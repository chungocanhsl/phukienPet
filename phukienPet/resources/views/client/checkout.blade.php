@extends('layouts.app1')
@section('title')
    Checkout
@endsection

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/bg.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Thanh toán</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                {!! Form::open(['action' => 'ClientController@postcheckout',
                   'method' =>'post', 'class' => 'billing-form', 'id' =>'checkout-form']) !!}
                {{csrf_field()}}

                    <h3 class="mb-4 billing-heading">Vui lòng điền đầy đủ thông tin </h3>
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                      {{Session::get('error')}}
                      {{Session::put('error',null)}}
                    </div>
                @endif
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstname">Tên</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" >
                            </div>
                        </div>

                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="towncity">Tên trên thẻ</label>
                                <input type="text" id="card-name" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="postcodezip">Số thẻ</label>
                                <input type="text" id="card-number" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Tháng hết hạn</label>
                                <input type="text" id="card-expiry-month" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Năm hết hạn</label>
                                <input type="text" id="card-expiry-year" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="emailaddress">CVC</label>
                                <input type="text" id="card-cvc" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Đặt hàng ngay">
                            </div>
                        </div>


                    </div>
                {!! Form::close() !!}
            </div>
            <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Giỏ hàng</h3>

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
                                <span>Thành tiền</span>
                                <span>${{Session::get('cart')->totalPrice}}</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->

@endsection


@section('scripts')
    <script src="https://js.stripe.com/v2/"></script>
    <script src="src/js/checkout.js"></script>
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