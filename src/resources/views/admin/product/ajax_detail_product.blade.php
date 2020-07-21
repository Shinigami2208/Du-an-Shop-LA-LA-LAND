@if(count($images) > 0 || count($comments) >0)
<div class="row">
    @if(count($images) > 0)
    <div class="col-md-6">
        <div class="name-Product text-center">Hình ảnh</div>
    </div>
    @endif
    @if(count($comments) > 0)
    <div class="name-supplier col-md-6 text-center">Bình luận</div>
    @endif
</div>
<div class="row">
    @if(count($images) > 0)
        <div class="col-md-6">
        <table class="table">
            <thead>
            <tr>
                <th >STT</th>
                <th>Hình ảnh</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1;?>
            @foreach($images as $image)
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td>
                    <img width="250px" height="250px" src="{{ config('image.imageProduct') . $image->image }}">
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            <div class="text-center " id ="detail">{{ $images->appends('page')->links() }}</div>
    </div>
    @endif
    @if(count($comments) > 0)
        <div class="col-md-6">
            <table class="table">
                <thead>
                <tr>
                    <th >STT</th>
                    <th>Người dùng</th>
                    <th >Bình luận</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                @foreach($comments as $comment)
                    <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td>{{ $comment->user->name }}</td>
                        <td >{{ $comment->content }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <div class="text-center">{{ $comments->appends('page')->links() }}</div>
        </div>

    @endif
</div>
@else
    <div class="text-center">
        Hiện tại chưa có hình ảnh và comment của sản phẩm . bạn có muốn thêm sản hình ảnh vào không ?
    </div>
@endif
<div class="text-center">Thêm hình ảnh cho sản phẩm : <span style="color: #1d68a7"> {{ $product->name }} </span></div>

<div class="text-center justify-content-center">
    <form role="form" method="post" action="{{ route('Admin.product.addimage', $product->id)}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    @if($errors->has('image'))
                        <div class="alert alert-danger">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                    <label for="promotion_price">Hình ảnh</label>
                    <input type="file" class="form-control" name="imageadd" id="image" >
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm hình ảnh</button>
    </div>
</form>
    {{ $configs }}
</div>
