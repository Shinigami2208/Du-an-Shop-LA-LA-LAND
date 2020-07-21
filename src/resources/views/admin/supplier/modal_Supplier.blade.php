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
                            <input type="text" class="form-control" name="phone" id="supplierPhone" placeholder="Số điện thoại ">
                        </div>
                        <div class="form-group">
                            <label for="supplierName">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="supplierAddress" placeholder="Đia chỉ ">
                        </div>
                        <div class="form-group">
                            <label for="supplierName">Email</label>
                            <input type="text" class="form-control" name="email" id="supplierEmail" placeholder="Địa chỉ email">
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
