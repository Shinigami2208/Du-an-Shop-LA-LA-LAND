@extends('adminlte::page')

@section('title', 'Danh sách sản phẩm')

@section('content_header')
    <h1>Danh sách sản phẩm</h1>
@stop

@section('content')
<div class="row">
    @if(session('messenger_success'))
        <div class="alert alert-primary">
            {{ session('messenger_success') }}
        </div>
    @endif

        <div class="modal-body">
            @if(count($errors))
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
            @endif
        </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="card-tools">

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-create">
                    <i class="fa fa-plus" aria-hidden="true"></i> Thêm sản phẩm
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 table-list">
                <table class="table">
                    <thead>
                    <tr>
                        <th >STT</th>
                        <th>Số hình ảnh</th>
                        <th >Tên Sản Phẩm</th>
                        <th >Danh Mục</th>
                        <th >Đơn giá</th>
                        <th >Khuyến mại</th>
                        <th >Số lượng</th>
                        <th >action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>
                               {{ count($product->images) }}
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>
                                {{ $product->category->name }}
                            </td>
                            <td>{{ $product->unit_price }}</td>
                            <td>{{ $product->promotion_price }}</td>
                            <td> {{ $product->quality }} </td>
                            <td>
                                <button onclick="detailProduct(this)" data-url="{{ route('Admin.product.detailComment',$product->id) }}" class="btn btn-default">xem</button>
                                <button onclick="edit(this)" data-url="{{ route('Admin.product.edit',$product->id) }}" class="btn btn-default btnEdit">sửa</button>
                                <button onclick="deleteProduct(this)" data-url ="{{ route('Admin.product.delete') }}" data-id="{{ $product->id }}" class="btn btn-default">xóa</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <div class="text-center">{{ $products->appends('page')->links() }}</div>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
        <!-- xem san pham -->
    <div class="container-fluid detail_product">

    </div>

    @include('admin.product.modal_product')
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/product_css.css') }}">
@stop
@section('js')
   <script>

       function edit(button) {
            var url = button.getAttribute('data-url');
            $.ajax({
                url : url,
                success :function (data) {
                    $("#modal-edit").html(data);
                }
            });
            $("#modal-edit").modal('show');
        }

       function deleteProduct(button) {
            var url = button.getAttribute('data-url');
            var id = button.getAttribute('data-id');
            $.ajax({
                type:"post",
                url: url,
                data:{
                    id:id,
                    _token: '{{ csrf_token() }}',
                },
                success: function () {
                    location.reload();
                }
            });
       }
       function detailProduct(button) {
            var url = button.getAttribute('data-url');

                $.ajax({
                    url : url,
                    success : function (data) {
                        $(".detail_product").html(data);
                    }
                });
            }
   </script>
@stop
