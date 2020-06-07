
<div class="card card-primary">
    <form role="form" method="post" action="{{ route('Admin.Category.Destroy', $id) }}">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <h4 class="text-center alert alert-primary">Tên danh mục : {{ $name }}</h4>
                <div class="text-center">
                    Bạn có muốn lưu các sản phẩm của danh mục muốn xóa sang danh mục khác không ?
                </div>

                <div class="justify-content-center text-center">
                    <select name="category" id="category">
                        <option value="">Không di chuyển</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Xoa Danh Muc</button>
        </div>
    </form>
</div>

<style>
    #category{
        border: 1px solid #1d68a7;
        width: 200px;
        height: 50px;
    }
</style>
