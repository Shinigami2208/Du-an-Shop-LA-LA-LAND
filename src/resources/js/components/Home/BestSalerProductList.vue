<template>
    <div id="best-saler-product-list" class="container best-saler-product-list">
        <div class="row gutter-5">
            <div  class="section-title col-12">Sản phẩm bán chạy nhất</div>
        </div>
        <div class="row gutter-5">
            <BestSalerProductItem v-for="product in products" :key="product.id" :product="product" class="col-3" />
        </div>
        <div class="row">
            <div class="col-12 discovery-more">
                <a href="http://google.com" class="discovery-more-content">
                    <div>Xem Thêm  <i class="fas fa-arrow-right"></i></div>
                    <div class="discovery-more-border"></div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import BestSalerProductItem from './BestSalerProductItem.vue';
export default {
    data() {
        return {
            products: [
                {id: 123232, src: "https://placekitten.com/801/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                {id: 223243, src: "https://placekitten.com/802/800", name: 'ĐÀN CASIO CT-X3000', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-CASIO-CT-X3000'},
                {id: 343223, src: "https://placekitten.com/803/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                {id: 476454, src: "https://placekitten.com/804/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
            ],
        }
    },
    components: {
        BestSalerProductItem
    }
}
</script>

<style scoped>
    /* Best Saler Product List  */

.best-saler-product-list{
    padding-top: 40px;
}
</style>
