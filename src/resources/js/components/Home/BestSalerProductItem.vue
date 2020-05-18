<template>
    <div class="home-product-list-item" @mousemove.stop="isShowAddToCart=true" @mouseleave.stop="isShowAddToCart=false">
        <router-link :to="{name: 'detail_product', params: {product_link: product.link}, props: {product: product}}" class="router-link-to-product-detail">
            <img :src="product.src" alt="product" class="home-product-list-item-photo" >
        </router-link>
        <div class="contain-add-to-cart">
            <button  class="btn-view-add-to-cart" v-show="isShowAddToCart" @click="addToCart(product)"><i class="fas fa-cart-plus"></i></button>
            <div class="home-product-list-item-name">{{product.name}}</div>
        </div>
        <div class="home-product-list-item-price">{{product.price}}</div>
        <div class="home-product-list-item-star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            isShowAddToCart: false
        }
    },
    props: ['product'],
    methods: {
        addToCart(product){
            this.eventBus.$emit('addToCart', product);
        }
    }
}
</script>

<style scoped>
    .contain-add-to-cart{
        position: relative;
        display: flex;
        justify-content: center;
    }

    .btn-view-add-to-cart{
        background-color:#999 ;
        display: block;
        color: white;
        padding-bottom: 5px;
        padding-top: 5px;
        width: 50px;
        font-size: 1.2rem;
        text-align: center;
        border-radius: 5px;
        margin-top: 40px;
        position: absolute;
        bottom: 100%;
        margin-bottom: 5px;
        border: none;
    }

    .btn-view-add-to-cart:hover{
        color: white;
        background-color: #c8b560;
    }
</style>