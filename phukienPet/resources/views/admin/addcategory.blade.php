@extends('layouts.appadmin')
@section('title')
    Thêm danh mục
@endsection

@section('content')

<div class="row grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tạo danh mục</h4>

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

                    {!! Form::open(['action' => 'CategoryController@savecategory',
                    'method' =>'post', 'class' => 'cmxform', 'id' => 'commentForm']) !!}
                    {{csrf_field()}}
                        <div class="form-group">
                            {{Form::label('','Tên danh mục',['for' => 'cname'])}}
                            {{Form::text('category_name', '', [
                            'class' => 'form-control',  'minlength' => '2'])}}
                        </div>
                {{Form::submit('Lưu',['class' => 'btn btn-primary'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

    @endsection


