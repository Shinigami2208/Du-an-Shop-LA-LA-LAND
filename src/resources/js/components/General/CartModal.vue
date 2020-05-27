<template>
    <div class="cart-modal">
        <table class="table">
            <thead>
                <tr>
                <th scope="col" width="25%"></th>
                <th scope="col" width="75%"></th>
                </tr>
            </thead>
            <tbody>
                <CartModalItem v-for="cart in carts" :key="cart.id" :cart="cart" />
                <tr>
                    <td colspan="2">
                        <router-link :to="{name: 'cart'}"  class="btn-view-cart">Xem Giỏ Hàng</router-link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import CartModalItem from './CartModalItem.vue';
export default {
    data(){
        return {
            carts: [],
            isExist: null
        }
    },
    components: {
        CartModalItem
    },
    mounted(){
        // this.getCartProducts();
        this.eventBus.$on('addToCart', (product) => {
            if(this.carts.indexOf(product) !== -1){
                this.showAlertSuccessAddToCart();
            }else{
                this.carts.push(product);
                this.showAlertWarnAddToCart();
            }
        });
    },
    methods: {
        // getCartProducts(){
        //     axios.get('/cart-product-list')
        //     .then( (response) => {
        //         // handle success
        //         this.carts = response.data;
        //     })
        //     .catch( (error) => {
        //         // handle error
        //         console.log(error);
        //     })
        // },
        showAlertSuccessAddToCart(){
            this.isExist = true;
            this.eventBus.$emit('showAlertSuccessAddToCart', this.isExist);
        },
        showAlertWarnAddToCart(){
            this.isExist = false;
            this.eventBus.$emit('showAlertWarnAddToCart', this.isExist)
        }
    }
}
</script>

<style scoped>
.cart-modal{
    width: 280px;
    height: 350px;
    background-color: aliceblue;
    position: absolute;
    overflow: hidden;
    transition: all 0.3s ease;
    text-align: left;
    border: 1px solid yellowgreen;
    border-radius: 10px;
    padding-left: 20px;
    padding-right: 20px;
    right: -100%;
}

.btn-view-cart{
    background-color:yellowgreen ;
    display: block;
    color: white;
    padding-bottom: 8px;
    padding-top: 8px;
    width: 100px;
    font-weight: bold;
    text-align: center;
    border-radius: 5px;
}

.btn-view-cart:hover{
    opacity: 0.8;
    text-decoration: none;
}

</style>