@foreach($products as $key => $product)
    <tr>
        <td>{{ $key +1 }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->quality }}</td>
        <td>{{ $product->unit_price }}</td>
    </tr>
@endforeach
