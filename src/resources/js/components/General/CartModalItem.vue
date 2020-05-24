<template>
    <tr class="cart-modal-item">
        <td>
            <img :src="cart.src" alt="image" class="product-cart-item-modal-photo">
        </td>
        <td>
            <div class="product-cart-item-name">{{cart.name}}</div>
            <div>{{cart.price | dinhDangTien(".")}}</div>
        </td>
    </tr>
</template>

<script>
export default {
    props: ['cart']

}
</script>

<style scoped>
.product-cart-item-modal-photo{
    height: 50px;
}

.product-cart-item-name{
    text-transform: uppercase;
}
</style>