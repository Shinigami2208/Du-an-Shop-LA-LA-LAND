<table class="table" id="table">
    <thead>
    <tr>
        <th >STT</th>
        <th>Số hình ảnh</th>
        <th >Tên Sản Phẩm</th>
        <th >Danh Mục</th>
        <th >Đơn giá</th>
        <th >Khuyến mại</th>
        <th >Số lượng</th>
        <th >action</th>
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
            <td>
                {{ $product->category->name }}
            </td>
            <td>{{ $product->unit_price }}</td>
            <td>{{ $product->promotion_price }}</td>
            <td> {{ $product->quality }} </td>
            <td>
                <button onclick="detailProduct(this)" data-url="{{ route('Admin.product.detailComment',$product->id) }}" class="btn btn-default">xem</button>
                <button onclick="edit(this)" data-url="{{ route('Admin.product.edit',$product->id) }}" class="btn btn-default btnEdit">sửa</button>
                <button onclick="deleteProduct(this)" data-url ="{{ route('Admin.product.delete') }}" data-id="{{ $product->id }}" class="btn btn-default">xóa</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="text-center"> {{ $products->appends("page")->links() }}</div>
