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
                    <tr>
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
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>{{ $supplier->phone }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>
                                <button class="btn btn-primary"> Chi tiết </button>
                                <button class="btn btn-default" onclick="edit(this)" data-url="{{ route('Admin.supplier.edit', $supplier->id) }}"> Sửa </button>
                                <button class="btn btn-primary"> Nhập kho</button>
                                <button class="btn btn-default"> Xem Báo cáo</button>
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
                    <form role="form" method="post" action="{{ route('Admin.supplier.store') }}">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="supplierName">Tên nhà cung cấp</label>
                                <input type="text" class="form-control" name="name" id="supplierName" placeholder="tên nhà cung cấp">
                            </div>
                            <div class="form-group">
                                <label for="supplierName">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" id="supplierName" placeholder="Số điện thoại ">
                            </div>
                            <div class="form-group">
                                <label for="supplierName">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" id="supplierName" placeholder="Đia chỉ ">
                            </div>
                            <div class="form-group">
                                <label for="supplierName">Email</label>
                                <input type="text" class="form-control" name="email" id="supplierName" placeholder="Địa chỉ email">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu nhà cung cấp</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="modal-edit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Sửa nhà cung cấp</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body edit">
                    <!-- /.card-header -->
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
    <script>
        function edit(button) {
            var url = button.getAttribute('data-url');
            $.ajax({
               url:url,
               success : function (data) {
                    $(".edit").html(data);
                    $('#modal-edit').modal('show');
               }
            });
        }
    </script>
@stop
