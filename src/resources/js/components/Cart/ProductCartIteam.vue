<template>
    <tr>
        <td>
            <img :src="cart.src" alt="image" class="product-cart-item-photo">
        </td>
        <td>    
            <a href="#" class="product-cart-iteam-name">{{cart.name}}</a>
            <div class="product-cart-iteam-note">{{cart.des}}</div>
        </td>
        <td class="product-cart-iteam-price">{{cart.price}}</td>
        <td>
            {{cart.quantity}}
        </td>
        <td class="product-cart-iteam-total">
            {{cart.price}}
        </td>
    </tr>
</template>

<script>

export default {
    props: ['cart'],
}

</script>

<style scoped>
.product-cart-item-photo{
    height: 180px;
}

.product-cart-iteam-name{
    text-transform: uppercase;
    font-size: 1.2rem;
    font-weight: bold;
    color: black;
}

.product-cart-iteam-name:hover{
    text-transform: uppercase;
    font-size: 1.2rem;
    font-weight: bold;
    color: yellowgreen;
    opacity: 0.5;
    text-decoration: none;
}

.product-cart-iteam-price{
    font-size: 1.2rem;
}

.product-cart-iteam-total{
    font-size: 1.2rem;
}
</style>