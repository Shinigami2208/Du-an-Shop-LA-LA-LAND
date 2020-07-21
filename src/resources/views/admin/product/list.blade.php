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
                <div class="card-tools nav-navbar" style="float: left">
                    <div class="input-group">
                        <input class="form-control form-control-navbar" id="search" type="search" onkeyup="searchProduct(this)" data-url="{{ route('Admin.product.search2') }}">
                        <button class="btn btn-navbar">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="card-tools">

                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus" aria-hidden="true"></i> Thêm sản phẩm
                        </button>
                    </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 table-list" id="search_products">
                <table class="table" id="table">
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
                </table>
                <div class="text-center"> {{ $products->appends("page")->links() }}</div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
        <!-- xem san pham -->
    <div class="container-fluid detail_products">

    </div>

    @include('admin.product.modal_product')
    @include('admin.product.loading')
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/product_css.css') }}">
@stop
{{--    kiem tra khi upload image thi se tu dong goi ajax chi tiet cua san pham--}}
@section('js')
   <script>
       @if( session('detail_id') )
        $(document).ready(function () {
           let string = {{ session('detail_id') }};
           console.log(string);
           $.ajax({
               url : "/admin/product/detail/"+string,
               success : function (data) {
                   $(".detail_product").html(data);
               },
               error : function () {
                   console.log("failse");
               }
           });
       });
   @endif

   function searchProduct(input) {
       //console.log(input);
       let url = input.getAttribute("data-url");
       let name = input.value;
       // console.log(url+" "+name);
       // let url =
       $("#loading").show();
       setTimeout(function () {
           $.ajax({
               type : "post",
               url : url,
               data : {
                   name : name,
                   _token: '{{ csrf_token() }}'
               },
               success : function (data) {
                   $("#loading").hide();
                   console.log(data);
                   $("#search_products").html(data);
               },
               errors : function () {
                   $("#loading").hide();
                   alert("Có vấn đề về mạng");
               }
           });
       },1000);
   }
       function deleteProduct(button) {
           let url = button.getAttribute('data-url');
           let id = button.getAttribute('data-id');
           $("#loading").show();
           $.ajax({
               type:"post",
               url: url,
               data:{
                   id:id,
                   _token: '{{ csrf_token() }}',
               },
               success: function () {
                   $("#loading").hide();
                   location.reload();
               },
               error : function () {
                   $("#loading").hide();
               }
           });
       }
   </script>
    <script src="{{ asset('/admin/js/product.js') }}"></script>
@stop
