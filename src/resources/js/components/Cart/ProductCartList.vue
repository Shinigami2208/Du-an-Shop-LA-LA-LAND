<template>
    <div class="container product-cart-list">
        <div class="row">
            <div class="col-12">
                <div class="cart-title">
                    GIỎ HÀNG
                </div>
                <div class="border-section"></div>
            </div>
        </div>
        <div class="row" style="padding-left: 15px; padding-right: 15px">
            <table class="table table-borderless col-12">
                <thead>
                    <tr>
                        <th scope="col" width="15%"></th>
                        <th scope="col" width="40%">Thông tin chi tiết sản phẩm</th>
                        <th scope="col" width="15%">Đơn giá</th>
                        <th scope="col" width="15%">Số lượng</th>
                        <th scope="col" width="15%">Tổng giá</th>
                    </tr>
                </thead>
                <tbody>
                    <ProductCartIteam v-for="cart in carts" :key="cart.id" :cart="cart" />
                    <CartTotalPay :totalPay="totalPay" />
                </tbody>
                </table>
        </div>
    </div>
</template>

<script>
import ProductCartIteam from './ProductCartIteam.vue';
import CartTotalPay from './CartTotalPay.vue';

export default {
    data() {
        return {
            carts: [
                {id: 1, src: "https://placekitten.com/801/800", name: 'ĐÀN ACOUSTIC GUITAR YAMAHA F310', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-ACOUSTIC-GUITAR-YAMAHA-F310'},
                {id: 2, src: "https://placekitten.com/802/800", name: 'ĐÀN CASIO CT-X3000', des: '12 Tháng / Bao Da 3 Lớp, Máy Lên Dây, Capo. Miễn Phí Vận Chuyển Toàn Quốc', price: 3000000, quantity: 1, link: 'DAN-CASIO-CT-X3000'},
            ],
            totalPay: null,
        }
    },
    components: {
        ProductCartIteam, 
        CartTotalPay
    },
    methods: {
        caculateTotalPay(){
            this.totalPay = this.carts.reduce((sum, cart)=>{
                sum = sum + cart.price * cart.quantity;
                return sum;
            }, 0)
        }
    },
    mounted(){
        this.caculateTotalPay();
        this.eventBus.$on('addToCart', (product) => {
            if(this.carts.indexOf(product) !== -1){
                window.alert('Sản Phẩm Đã Có Trong Giỏ Hàng');
            }else{
                this.carts.push(product);
            }
        });
    },
    watch: {
        carts: {
            handler(){
                this.caculateTotalPay()
            },
            deep: true,
            immediate: true
        }
    }
}
</script>

<style scoped>
.product-cart-list{
    padding-top: 20px;
    margin-top: 20px;
}
.cart-title{
    text-transform: uppercase;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 20px;
}

tr{
    border-top: 1px solid gray;
    border-bottom: 1px solid gray;
}
</style>