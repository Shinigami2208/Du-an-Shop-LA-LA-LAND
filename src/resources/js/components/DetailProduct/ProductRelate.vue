<template>
    <div class="container product-relate">
        <div class="row gutter-5">
            <div class="col-12 section-title">SẢN PHẨM LIÊN QUAN</div>
        </div>
        <div class="row gutter-5">
            <div class="col-3">
                <ProductRelateItem />
            </div>
            <div class="col-3">
                <ProductRelateItem />
            </div>
            <div class="col-3">
                <ProductRelateItem />
            </div>
            <div class="col-3">
                <ProductRelateItem />
            </div>
        </div>
    </div>
</template>

<script>
    import ProductRelateItem from './ProductRelateItem';
    export default {
        mounted() {
        },
        components: {
            ProductRelateItem
        }
    }
</script>
<style scoped>
    .product-relate{
        padding-top: 20px;
    }
</style>
