@extends('adminlte::page')

@section('title', 'Danh sách nhà cung cấp')

@section('content_header')
    <h1>Danh sách nhà cung cấp</h1>
@stop

@section('content')
@if(session('messenger_success'))
    <div class="alert alert-primary">
        {{ session('messenger_success') }}
    </div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-create">
                    <i class="fa fa-plus" aria-hidden="true"></i> Nhà cung cấp mới
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr class="text-center">
                        <th>STT</th>
                        <th>Tên nhà cung cấp</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($suppliers as $key => $supplier)
                        <tr class="text-center">
                            <td>{{ $key + 1 }}</td>
                            <td >{{ $supplier->name }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>{{ $supplier->phone }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>
                                <button class="btn btn-primary"> Chi tiết </button>
                                <button class="btn btn-default" onclick="edit(this)" data-url="{{ route('Admin.supplier.edit', $supplier->id) }}"> Sửa </button>
                                <button class="btn btn-primary"> Nhập kho</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center"> {{ $suppliers->appends('page')->links() }} </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="container-fluid text-center">
        <h1>Nhập sản phẩm</h1>
    <div class="row">
        <div class="col-md-6">
                    <div class="col" style="display: inline; margin: 10px 10px">
                        <input placeholder="Nhập tên của sản phẩm" onkeyup="searchProduct(this)" data-url="{{ route("Admin.product.search") }}" class="supplier-input" style="float: left">
                    </div>
                <div class="card-body p-0 table-list" style="margin: 10px 10px">
                    <table class="table" id="table">
                        <thead>
                        <tr>
                            <th >STT</th>
                            <th >Tên Sản Phẩm</th>
                            <th >Số lượng</th>
                            <th >Đơn giá</th>
                        </tr>
                        </thead>
                        <tbody id="search_products">
                        @foreach($products as $key => $product)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->quality }}</td>
                                <td>{{ $product->unit_price }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
{{--            <div class="row" style="margin: 10px 10px;">--}}
{{--                <div class="col-md-6">--}}
{{--                    <label class="infor-supplier">Nhap so luong </label>--}}
{{--                    <input class="supplier-input" type="text" placeholder="Nhap so luong" >--}}
{{--                </div>--}}
{{--                <div class="col-md-6" style="display: inline-block">--}}
{{--                    <label class="infor-supplier"> Don gia </label>--}}
{{--                    <input class="supplier-input"   type="text" placeholder="Nhap don gia">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-center">--}}
{{--                <button class="btn btn-default">Them hang</button>--}}
{{--            </div>--}}
        </div>
        <div class="col-md-6">
            <div class="card-body p-0 table-list">
                <table class="table" id="table">
                    <thead>
                    <tr>
                        <th >STT</th>
                        <th >Tên Sản Phẩm</th>
                        <th >Số lượng</th>
                        <th >so tien</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
 </div>
    @include('admin.supplier.modal_Supplier')
    @include('admin.supplier.loading')
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/supllier.css">
    <link rel="stylesheet" href="/css/product_css.css">
@stop

@section('js')
    <script>
        function edit(button) {
            let url = button.getAttribute('data-url');
            $("#loading").show();
            $.ajax({
               url:url,
               success : function (data) {
                   $("#loading").hide();
                    $(".edit").html(data);
                    $('#modal-edit').modal('show');
               },
                errors : function () {
                    $("#loading").hide();
                }
            });
        }
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
    </script>
@stop
