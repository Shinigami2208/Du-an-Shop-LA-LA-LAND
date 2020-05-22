<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title">Sủa Sản phẩm</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('Admin.Product.PostEdit', $product->id)}} ">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="name" id="inputName" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
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
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nhà Cung Cấp</label>
                                <select class="custom-select" name="supplier_id">
                                    @foreach ($suppliers as $supplier)
                                        <option
                                            @if($product->supplier_id == $supplier->id)
                                            selected
                                            @endif
                                            value="{{$supplier->id}}">{{$supplier->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputPrice">Giá Sản Phẩm</label>
                                <input type="text" class="form-control" name="unit_price" id="inputPrice" value="{{ $product->unit_price }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="promotion_price">Giá Khuyến Mãi</label>
                                <input type="text" class="form-control" name="promotion_price" id="promotion_price" value="{{$product->promotion_price}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="promotion_price">So luong</label>
                                <input type="text" class="form-control" name="quality" id="promotion_price" value="{{ $product->quality }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
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
