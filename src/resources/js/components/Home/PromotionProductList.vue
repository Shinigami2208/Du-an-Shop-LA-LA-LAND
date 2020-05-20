<template>
    <div id="promotion-product-list" class="container promotion-product-list">
        <div class="row gutter-5">
            <div class="section-title col-12">Sản phẩm khuyến mãi</div>
        </div>
        <div class="row gutter-5">
            <PromotionProductItem v-for="product in products" :key="product.id" :product="product"  class="col-2"/>
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
import PromotionProductItem from './PromotionProductItem.vue'; 
export default {
    data() {
        return {
            products: [
                {id: 1, src: "https://placekitten.com/801/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 2, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                {id: 2, src: "https://placekitten.com/802/800", name: 'ĐÀN CASIO CT-X3000', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 2, link: 'DAN-CASIO-CT-X3000'},
                {id: 3, src: "https://placekitten.com/803/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 2, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                {id: 4, src: "https://placekitten.com/804/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 2, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                {id: 5, src: "https://placekitten.com/803/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 2, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                {id: 6, src: "https://placekitten.com/804/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 2, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
            ],
        }
    },
    components: {
        PromotionProductItem
    }
}
</script>

<style scoped>
    /* Promotion Product List */

.promotion-product-list{
    padding-top: 40px;
}
</style>