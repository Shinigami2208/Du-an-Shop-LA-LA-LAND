@extends('adminlte::page')

@section('title', 'Xóa danh mục')

@section('content_header')
    <h3>Xóa danh mục</h3>
@stop

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{route('adminProduct.destroy', [$id])}}">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="card-body">
            <p>Bạn có đồng ý xóa sản phẩm {{$product->name}} không?</p>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Đồng ý</button>
        </div>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop