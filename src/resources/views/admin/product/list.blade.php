@extends('adminlte::page')

@section('title', 'Danh sách sản phẩm')

@section('content_header')
    <h1>Danh sách sản phẩm</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="card-tools">
             <!-- <a href="{{route('adminProduct.create' )}}" class="btn btn-block btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Thêm sản phẩm</a> -->
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-create">
                    <i class="fa fa-plus" aria-hidden="true"></i> Thêm sản phẩm
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 5%">STT</th>
                        <th style="width: 20%">Hình ảnh</th>
                        <th style="width: 20%">Tên Sản Phẩm</th>
                        <th style="width: 20%">Danh Mục</th>
                        <th style="width: 20%">Đơn giá</th></th>
                        <th style="width: 5%"></th>
                        <th style="width: 5%"></th>
                        <th style="width: 5%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>
                                @foreach($product->images as $image)
                                    <image src="{{$image->image}}" alt="Image" height="200">
                                @endForeach
                            </td>
                            <td>{{$product->name}}</td>
                            <td>
                                @foreach($product->categories as $category)
                                <p>{{$category->name}}</p>
                                @endForeach
                            </td>
                            <td>{{$product->unit_price}}</td>
                            <td><a href="{{route('adminProduct.show', [$product->id] )}}" class="btn btn-block btn-default">Xem</a></td>
                            <td><a href="{{route('adminProduct.edit', [$product->id] )}}" class="btn btn-block btn-default">Sửa</a></td>
                            <td><a href="{{route('adminProductDeleteForm', [$product->id])}}" class="btn btn-block btn-default">Xóa</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="modal fade" id="modal-create" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Thêm Sản Phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- /.card-header -->
                <!-- form start -->
                    <form role="form" method="post" action="{{route('adminProduct.store')}}">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Tên Sản Phẩm</label>
                                <input type="text" class="form-control" name="name" id="inputName" placeholder="Ten san pham...">
                            </div>
                            <!-- <div class="form-group">
                                <label>Danh Mục</label>
                                <select class="custom-select" name="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label>Danh Mục</label>
                                <select multiple="" class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Thương Hiệu</label>
                                        <select class="custom-select" name="brand_id">
                                            @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nhà Cung Cấp</label>
                                        <select class="custom-select" name="supplier_id">
                                            @foreach ($suppliers as $supplier)
                                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="inputPrice">Giá Sản Phẩm</label>
                                        <input type="text" class="form-control" name="unit_price" id="inputPrice" placeholder="Gia san pham"...">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="promotion_price">Giá Khuyến Mãi</label>
                                        <input type="text" class="form-control" name="promotion_price" id="promotion_price" placeholder="Gia khuyen mai...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Mô Tả</label>
                                <textarea class="form-control" rows="3" name="description" id="description" placeholder="Mo ta..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="detail_description">Chi Tiết Sản Phẩm</label>
                                <textarea class="form-control" rows="3" name="detail_description" id="detail_description" placeholder="Chi tiet san pham..."></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop