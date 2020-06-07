<div class="card card-primary">
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="post" action="{{ route('Admin.Category.Update', $category->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Tên Danh Mục</label>
                <input type="text" class="form-control" name="name" id="inputName" value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <label for="description">Miêu tả</label>
                <textarea class="form-control" rows="3" name="description" id="description" >
                    {{ $category->description  }}
                </textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Sửa danh mục</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>
</div>
