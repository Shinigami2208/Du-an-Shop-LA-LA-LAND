<form role="form" method="post" action="{{ route('Admin.supplier.update', $supplier->id) }}">
    {{csrf_field()}}
    <div class="card-body">
        <div class="form-group">
            <label for="supplierName">Tên nhà cung cấp</label>
            <input type="text" class="form-control" name="name" id="supplierName" value="{{ $supplier->name }}">
        </div>
        <div class="form-group">
            <label for="supplierName">Số điện thoại</label>
            <input type="text" class="form-control" name="phone" id="supplierName" value="{{ $supplier->phone }}">
        </div>
        <div class="form-group">
            <label for="supplierName">Địa chỉ</label>
            <input type="text" class="form-control" name="address" id="supplierName" value="{{ $supplier->address }}">
        </div>
        <div class="form-group">
            <label for="supplierName">Email</label>
            <input type="text" class="form-control" name="email" id="supplierName" value="{{ $supplier->email }}">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Lưu nhà cung cấp</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </div>
</form>
