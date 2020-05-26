<div class="row">
    <div class="col-md-6">
        <div class="name-Product text-center">Hình ảnh</div>
    </div>
    <div class="name-supplier col-md-6 text-center">Bình luận</div>
</div>
<div class="row">
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
                <td><img src="{{ config('image.imageProduct') . $image->image }}"></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
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
    </div>
</div>
