@extends('layouts.login')
@section('title')
    Signup
@endsection

@section('content')

    <div class="limiter">
        <div class="container-login100" style="background-image: url('frontend/login/images/bg-01.jpg');">
            <div class="wrap-login100">

                @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{Session::get('status')}}
                    </div>
                @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <form action="{{url('/createaccount')}}" method="post" class="login100-form validate-form">
                    {{csrf_field()}}
                    <a href="{{URL::to('/')}}">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
                    </a>

                    <span class="login100-form-title p-b-34 p-t-27">
						Đăng ký
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>



                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Đăng ký
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="/client_login">
                            Bạn đã có tài khoản? Đăng nhập ngay
                        </a>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection