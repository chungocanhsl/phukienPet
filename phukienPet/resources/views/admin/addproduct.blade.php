@extends('layouts.appadmin')
@section('title')
    Thêm sản phẩm
@endsection

@section('content')

<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tạo sản phẩm</h4>
                @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{Session::get('status')}}
                    </div>
                @endif

                @if(Session::has('status1'))
                    <div class="alert alert-danger">
                        {{Session::get('status1')}}
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

                    {!! Form::open(['action' => 'ProductController@saveproduct',
                    'method' =>'post', 'class' => 'cmxform', 'id' => 'commentForm','enctype'=>'multipart/form-data']) !!}
                    {{csrf_field()}}

                        <div class="form-group">
                            {{Form::label('','Tên sản phẩm',['for' => 'cname'])}}
                            {{Form::text('product_name', '', [
                            'class' => 'form-control',  'minlength' => '2'])}}
                        </div>

                    <div class="form-group">
                        {{Form::label('','Giá',['for' => 'cname'])}}
                        {{Form::number('product_price', '', [
                        'class' => 'form-control',  'minlength' => '2'])}}
                    </div>
                <div class="form-group">
                    {{Form::label('','Mô tả',['for' => 'cname'])}}
                    {{Form::text('product_description', '', [
                    'class' => 'form-control',  'minlength' => '2'])}}
                </div>
                <div class="form-group">
                    {{Form::label('','Danh mục',['for' => 'cname'])}}
                    {{Form::select('product_category', $categories,
                    null, ['placeholder' => 'Chọn danh mục','class' => 'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('','Ảnh',['for' => 'cname'])}}
                    {{Form::file('product_image', [
                    'class' => 'form-control'])}}
                </div>




                {{Form::submit('Lưu',['class' => 'btn btn-primary'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

    @endsection

@section('scripts')
    <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>
@endsection