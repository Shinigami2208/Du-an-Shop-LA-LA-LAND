@extends('adminlte::page')

@section('title', 'Quản Lý Danh Mục')

@section('content_header')
    <h1>Quản Lý Danh Mục</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus" aria-hidden="true"></i> Thêm Danh Mục
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10%">STT</th>
                            <th style="width: 20%">Tên Danh Mục</th>
                            <th style="width: 50%">Mô tả</th>
                            <th style="width: 20%">action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <button class="btn btn-default" onclick="detail(this)" data-url="{{ route('Admin.Category.Detail', $category->id) }}">Chi tiết</button>
                                    <button class="btn btn-default" onclick="edit(this)" data-url="{{ route('Admin.Category.Edit', $category->id) }}">Sửa</button>
                                    <button class="btn btn-default" onclick="deleteCategory(this)" data-url="{{ route('Admin.Category.Delete', $category->id) }}">Xóa</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">{{ $categories->appends('page')->render() }}</div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    @include('admin.category.modal_category')
    @include('admin.product.loading')
    </div>
    <div class="container-fluid" id="detail">

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/product_css.css') }}">
@stop

@section('js')
    <script>
        function edit(button) {
            let url = button.getAttribute('data-url');
            $("#loading").show();
            $.ajax({
               url : url,
               success : function (data) {
                   $("#loading").hide();
                    var x = $('#Edit').html(data);
                    if(x){
                        $('#modal-edit').modal('show');
                    }
               },
                error : function () {
                    $("#loading").hide();
                }
            });
        }

        function deleteCategory(button) {
            let url = button.getAttribute('data-url');
            $("#loading").show();
            $.ajax({
                url : url,
                success : function (data) {
                    $("#loading").hide();
                    let x = $('#delete').html(data);
                    if(x){
                        $('#modal-delete').modal('show');
                    }
                }
            })
        }
        function detail(button) {
            let url = button.getAttribute('data-url');
            $("#loading").show();
            setTimeout(function () {
                $.ajax({
                    url : url,
                    success : function (data) {
                        $("#loading").hide();
                        $('#detail').html(data);
                    }
                });
            },2000);
            // ajax sau khi hoan thanh
            $(document).ajaxComplete(function() {
                // lang nghe khi co click vi paginate category co cung dia chi. phai them id o detail
                $('#detail-product .pagination li a').click(function(e) {
                    // giu nguyen trang thai
                    $("#loading").show();
                    e.preventDefault();
                    let url = $(this).attr('href');
                    $.ajax({
                        url: url,
                        success: function(data) {
                            $("#loading").hide();
                            $("#detail").html(data);
                        }
                    });
                });
            });
        }
    </script>
@stop
