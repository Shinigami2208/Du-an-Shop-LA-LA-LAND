<template>
    <div class="product-viewed-item">
        <router-link :to="{name: 'detail_product'}" class="product-viewed-item-photo"></router-link>
        <div class="product-viewed-item-name">Ducati Aventado</div>
        <div class="product-viewed-item-price">$100.00</div>
        <div class="product-viewed-item-star">
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
        mounted() {
        },
        components: {
            
        }
    }
</script>
<style scoped>
.product-viewed-item{
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.product-viewed-item-photo{
    background-image: url('https://i.pinimg.com/564x/c2/2c/7a/c22c7a6f3a787c165c071979cbbd7991.jpg');
    background-size: cover;
    background-position: center center;
    height: 200px;
    width: 100%;
}
    
</style>
