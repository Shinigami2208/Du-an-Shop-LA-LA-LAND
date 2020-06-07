
@if(count($products)>0)
<div class="text-center" style="font-size: 30px; color: #1d68a7">Danh sách sản phẩm của danh mục :</div>
<div class="card-body p-0 table-list">
    <table class="table" id="table">
        <thead>
        <tr>
            <th >STT</th>
            <th>Số hình ảnh</th>
            <th >Tên Sản Phẩm</th>
            <th >Đơn giá</th>
            <th >Khuyến mại</th>
            <th >Số lượng</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <td>{{$key + 1}}</td>
            <td>
                {{ count($product->images) }}
            </td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->unit_price }}</td>
            <td>{{ $product->promotion_price }}</td>
            <td> {{ $product->quality }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center" id="detail-product">{{ $products->appends('page')->links() }}</div>
</div>
@else
    <div class="text-center">Hiện tại chưa có sản phẩm cho danh mục này </div>
@endif
