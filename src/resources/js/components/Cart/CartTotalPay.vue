<template>
    <tr>
        <td colspan="3">
            
        </td>
        <td colspan="2">    
            <div class="product-cart-total-pay">Tổng Tiền: {{totalPay}}</div>
            <a href="#" class="product-cart-checkout">Thanh Toán</a>
        </td>
    </tr>
</template>

<script>

export default {
    props: ['totalPay'],
}

</script>

<style scoped>

.product-cart-total-pay{
    font-size: 1.2rem;
    font-weight: bold;
}

.product-cart-checkout{
    background-color: #B6A03F;
    width: 100px;
    color: white;
    display: block;
    text-align: center;
    font-weight: bold;
    margin-top: 20px;
    padding-bottom: 8px;
    padding-top: 8px;
    border-radius: 3px;
}

.product-cart-checkout:hover{
    text-decoration: none;
    opacity: 0.5;
}

</style>