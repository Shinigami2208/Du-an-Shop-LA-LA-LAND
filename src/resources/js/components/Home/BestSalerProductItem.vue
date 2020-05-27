<template>
    <div>
        <div class="home-product-list-item">
            <router-link :to="{name: 'detail_product', params: {product_slug: this.rewriteUrl(product.name), product_id:product.id}}" class="router-link-to-product-detail">
                <img :src="product.src" alt="product" class="home-product-list-item-photo" >
            </router-link>
            <div class="contain-add-to-cart">
                <button  class="btn-view-add-to-cart" @click.stop="addToCart(product)"><i class="fas fa-cart-plus"></i></button>
                <div class="home-product-list-item-name">{{product.name}}</div>
            </div>
            <div class="home-product-list-item-price">{{product.price | dinhDangTien(".")}}</div>
            <div class="home-product-list-item-star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            
        }
    },
    props: ['product'],
    methods: {
        addToCart(product){
            this.eventBus.$emit('addToCart', product);
            // axios.post('/cart-product-list', {
            //     product_id: product.id,
            // })
            // .then(function (response) {
            //     console.log(response);
            // })
            // .catch(function (error) {
            //     console.log(error);
            // });
        }
    }
}
</script>

<style scoped>
    
</style>