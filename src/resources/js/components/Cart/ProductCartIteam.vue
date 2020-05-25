<template>
    <tr>
        <td>
            <img :src="cart.src" alt="image" class="product-cart-item-photo">
        </td>
        <td>    
            <a href="#" class="product-cart-iteam-name">{{cart.name}}</a>
            <div class="product-cart-iteam-note">{{cart.des}}</div>
        </td>
        <td class="product-cart-iteam-price" style="text-align: center">{{cart.price}}</td>
        <td class="quantity-column">
            <button class="quantity-icon quantity-cion-inc" @click="incQuantityCart(cart)">+</button>
            <div class="quantity-number">{{cart.quantity}}</div>
            <button class="quantity-icon quantity-cion-dec" @click="decQuantityCart(cart)">-</button>
        </td>
        <td class="product-cart-iteam-total" style="text-align: center">
            {{cart.price}}
        </td>
    </tr>
</template>

<script>

export default {
    props: ['cart'],
    methods: {
        incQuantityCart(cart){
            this.eventBus.$emit('incQuantityCart', cart);
        },
        decQuantityCart(cart){
            this.eventBus.$emit('decQuantityCart', cart);
        },
    }
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

.quantity-column{
    display: flex;
    flex-direction: row;
    text-align: center;
}
.quantity-cion-inc{
    flex-basis: 35px;
}

.quantity-cion-dec{
    flex-basis: 35px;
}

.quantity-icon{
    background-color: chartreuse;
    border-radius: 3px;
    text-align: center;
    border: none;
}

.quantity-number{
    flex-grow: 1;
}

.quantity-icon:hover{
    opacity: 0.5;
}

.quantity-icon:focus{
    border: 1px solid yellow;
}
</style>