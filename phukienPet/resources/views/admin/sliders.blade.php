@extends('layouts.appadmin')
@section('title')
    Sliders
@endsection

@section('content')
    {{Form::hidden('',$increment=1)}}
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Sliders</h4>
        @if(Session::has('status'))
            <div class="alert alert-success">
                {{Session::get('status')}}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Mô tả thứ nhất</th>
                            <th>Mô tả thứ hai</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                        <tr>
                            <td>{{$increment}}</td>
                            <td><img src="/storage/slider_images/{{$slider->slider_image}}" alt=""></td>
                            <td>{{$slider->description1}}</td>
                            <td>{{$slider->description2}}</td>
                            @if($slider->status == 1)
                                <td>
                                    <label class="badge badge-success">Đang hoạt động</label>
                                </td>
                            @else
                                <td>
                                    <label class="badge badge-danger">Không hoạt động</label>
                                </td>
                            @endif

                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location= '{{url('/editslider/'.$slider->id)}}'">Sửa</button>
                                <a href="/deleteslider/{{$slider->id}}" class="btn btn-outline-danger" id="delete">Xóa</a>
                                @if($slider->status == 1)
                                    <button class="btn btn-outline-warning" onclick="window.location= '{{url('/unactivate_slider/'.$slider->id)}}'">Không hoạt động</button>
                                @else
                                    <button class="btn btn-outline-success" onclick="window.location= '{{url('/activate_slider/'.$slider->id)}}'">Hoạt động</button>

                                @endif
                            </td>
                        </tr>
                            {{Form::hidden('', $increment=$increment+1)}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection

@section('scripts')
    <script src="{{asset('backend/js/data-table.js')}}"></script>
    <script src="{{asset('backend/js/dashboard.js')}}"></script>
@endsection