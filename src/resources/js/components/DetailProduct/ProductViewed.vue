<template>
    <div class="container product-viewed">
        <div class="row gutter-5">
            <div class="col-12 section-title">SẢN PHẨM ĐÃ XEM</div>
        </div>
        <div class="row gutter-5">
            <div class="col-3">
                <ProductViewedItem />
            </div>
            <div class="col-3">
                <ProductViewedItem />
            </div>
            <div class="col-3">
                <ProductViewedItem />
            </div>
            <div class="col-3">
                <ProductViewedItem />
            </div>
        </div>
    </div>
</template>

<script>
    import ProductViewedItem from './ProductViewedItem.vue';
    export default {
        mounted() {
        },
        components: {
            ProductViewedItem
        }
    }
</script>
<style scoped>
    .product-viewed{
        padding-top: 20px;
    }
</style>
