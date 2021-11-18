@extends('layouts.appadmin')
@section('title')
    Sản phẩm
@endsection

@section('content')
    {{Form::hidden('',$increment=1)}}

    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Sản phẩm</h4>
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
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Thuộc danh mục</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$increment}}</td>
                            <td><img src="/storage/product_images/{{$product->product_image}}" alt=""></td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>{{$product->product_category}}</td>

                            @if($product->status == 1)
                                <td>
                                    <label class="badge badge-success">Hoạt động</label>
                                </td>
                            @else
                            <td>
                                <label class="badge badge-danger">Không hoạt động</label>
                            </td>
                            @endif
                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location= '{{url('/editproduct/'.$product->id)}}'">Sửa </button>
                                <a href="/deleteproduct/{{$product->id}}" class="btn btn-outline-danger" id="delete">Xóa</a>
                                @if($product->status == 1)
                                    <button class="btn btn-outline-warning" onclick="window.location= '{{url('/unactivate_product/'.$product->id)}}'">Không hoạt động</button>
                                @else
                                    <button class="btn btn-outline-success" onclick="window.location= '{{url('/activate_product/'.$product->id)}}'">Hoạt động</button>

                                @endif
                            </td>



                        </tr>
                        {{Form::hidden('',$increment=$increment+1)}}

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