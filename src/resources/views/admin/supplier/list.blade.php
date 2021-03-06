@extends('adminlte::page')

@section('title', 'Danh sách nhà cung cấp')

@section('content_header')
    <h1>Danh sách nhà cung cấp</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="card-tools">
             <!-- <a href="{{route('adminProduct.create' )}}" class="btn btn-block btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Thêm sản phẩm</a> -->
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-create">
                    <i class="fa fa-plus" aria-hidden="true"></i> Nhà cung cấp mới
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10%">STT</th>
                        <th style="width: 40%">Tên nhà cung cấp</th>
                        <th style="width: 10%"></th>
                        <th style="width: 10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($suppliers as $key => $supplier)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$supplier->name}}</td>
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
                <h4 class="modal-title">Thêm nhà cung cấp</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- /.card-header -->
                <!-- form start -->
                    <form role="form" method="post" action="{{route('adminSupplier.store')}}">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="supplierName">Tên nhà cung cấp</label>
                                <input type="text" class="form-control" name="name" id="supplierName" placeholder="Ten nha cung cap...">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu nhà cung cấp</button>
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