@extends('layouts.appadmin')
@section('title')
    Thêm slider
@endsection

@section('content')

<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tạo slider</h4>
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
                    {!! Form::open(['action' => 'SliderController@saveslider',
                    'method' =>'post', 'class' => 'cmxform', 'id' => 'commentForm', 'enctype' => 'multipart/form-data']) !!}
                    {{csrf_field()}}
                        <div class="form-group">
                            {{Form::label('','Mô tả thứ nhất',['for' => 'cname'])}}
                            {{Form::text('description_one', '', [
                            'class' => 'form-control',  'minlength' => '2'])}}
                        </div>

                <div class="form-group">
                    {{Form::label('','Mô tả thứ hai',['for' => 'cname'])}}
                    {{Form::text('description_two', '', [
                    'class' => 'form-control',  'minlength' => '2'])}}
                </div>

                <div class="form-group">
                    {{Form::label('','Ảnh slider',['for' => 'cname'])}}
                    {{Form::file('slider_image', [
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