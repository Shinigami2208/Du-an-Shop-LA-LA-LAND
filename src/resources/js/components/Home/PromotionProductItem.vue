<template>
    <div class="home-product-list-item">
        <router-link :to="{name: 'detail_product', params: {product_link: product.link}, props: {product: product}}">
            <img :src="product.src" alt="product" class="home-product-list-item-photo" >
        </router-link>
        <div class="home-product-list-item-name">{{product.name}}</div>
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
    props: ['product'],
    mounted(){
        
    }
}
</script>

<style scoped>

</style>