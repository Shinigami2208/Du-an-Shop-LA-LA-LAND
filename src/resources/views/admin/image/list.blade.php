@extends('adminlte::page')

@section('title', 'Danh sách hình ảnh')

@section('content_header')
    <h1>Danh sách hình ảnh</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="card-tools">
             <!-- <a href="{{route('adminProduct.create' )}}" class="btn btn-block btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Thêm sản phẩm</a> -->
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-create">
                    <i class="fa fa-plus" aria-hidden="true"></i> Thêm hình ảnh
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10%">STT</th>
                        <th style="width: 30%">Hình ảnh</th>
                        <th style="width: 40%">Tên Sản Phẩm</th>
                        <th style="width: 10%"></th>
                        <th style="width: 10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($images as $key => $image)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>
                                <img src="{{$image->image}}" alt="Image" height="200">
                            </td>
                            <td>{{$image -> product ->name}}</td>
                            <!-- <td><a href="{{route('adminProduct.edit', [$image->id] )}}" class="btn btn-block btn-default">Sửa</a></td>
                            <td><a href="{{route('adminProductDeleteForm', [$image->id])}}" class="btn btn-block btn-default">Xóa</a></td> -->
                            <td>Sửa</td>
                            <td>Xóa</td>
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
                <h4 class="modal-title">Thêm hình ảnh</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- /.card-header -->
                <!-- form start -->
                    <form role="form" method="post" action="{{route('adminImage.store')}}">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="urlImage">Url</label>
                                <input type="text" class="form-control" name="image" id="urlImage" placeholder="Url hinh anh...">
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <select class="custom-select" name="product_id">
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu hình ảnh</button>
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