<template>
    <div class="container product-relate">
        <div class="row gutter-5">
            <div class="col-12 section-title">SẢN PHẨM LIÊN QUAN</div>
        </div>
        <div class="row gutter-5">
            <ProductRelateItem v-for="product in products" :key="product.id" :product="product" class="col-3" />
        </div>
    </div>
</template>

<script>
    import ProductRelateItem from './ProductRelateItem';
    export default {
        data() {
            return {
                products: [
                    {id: 122222, src: "https://placekitten.com/801/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                    {id: 2223232, src: "https://placekitten.com/802/800", name: 'ĐÀN CASIO CT-X3000', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-CASIO-CT-X3000'},
                    {id: 3234, src: "https://placekitten.com/803/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                    {id: 4234524, src: "https://placekitten.com/804/800", name: 'Trần Thị Minh Thúy', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                ],
            }
        },
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
