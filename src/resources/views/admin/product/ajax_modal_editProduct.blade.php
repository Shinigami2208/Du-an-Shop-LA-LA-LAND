<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Sửa Sản phẩm</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('Admin.product.PostEdit', $product->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        @if($errors->has('name'))
                            <div class="alert alert-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <label for="inputName">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="name" id="inputName" value="{{ $product->name }}">
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
                                <option
                                    @if($product->category_id == $category->id)
                                        selected
                                     @endif
                                    value="{{ $category->id }}">{{$category->name}}</option>
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
                                        <option
                                            @if($product->brand_id == $brand->id)
                                            selected
                                            @endif
                                            value="{{$brand->id}}">{{$brand->name}}</option>
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
                                <input type="text" class="form-control" name="unit_price" id="inputPrice" value="{{ $product->unit_price }}">
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
                                <input type="text" class="form-control" name="promotion_price" id="promotion_price" value="{{$product->promotion_price}}">
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
                        <textarea class="form-control" rows="3" name="description" id="description">
                            {{ $product->description }}
                        </textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
