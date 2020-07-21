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
                <form role="form" method="post" action="{{route('adminProduct.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            @if($errors->has('name'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('name') }}
                                </div>
                             @endif
                            <label for="inputName">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" name="name" id="inputName" placeholder="Ten san pham...">
                        </div>
                        <div class="form-group">
                            @if($errors->has('category_id'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('category_id') }}
                                </div>
                            @endif
                            <label>Danh Mục</label>
                            <select multiple="" class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    @if($errors->has('brand_id'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('brand_id') }}
                                        </div>
                                    @endif
                                    <label>Thương Hiệu</label>
                                    <select class="custom-select" name="brand_id">
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    @if($errors->has('unit_price'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('unit_price') }}
                                        </div>
                                    @endif
                                    <label for="inputPrice">Giá Sản Phẩm</label>
                                    <input type="text" class="form-control" name="unit_price" id="inputPrice" placeholder="Gia san pham"...">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    @if($errors->has('promotion_price'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('promotion_price') }}
                                        </div>
                                    @endif
                                    <label for="promotion_price">Giá Khuyến Mãi</label>
                                    <input type="text" class="form-control" name="promotion_price" id="promotion_price" placeholder="Gia khuyen mai...">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    @if($errors->has('image'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('image') }}
                                        </div>
                                    @endif
                                    <label for="promotion_price">Hình ảnh</label>
                                    <input type="file" class="form-control" name="image" id="image" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            @if($errors->has('description'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                            <label for="description">Mô Tả</label>
                            <textarea class="form-control" rows="3" name="description" id="description" placeholder="Mo ta..."></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<div class="modal fade" id="modal-edit" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">sửa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- /.card-header -->
                <!-- form start -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

