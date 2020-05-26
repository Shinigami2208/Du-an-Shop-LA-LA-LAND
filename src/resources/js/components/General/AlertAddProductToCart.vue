<template>
    <div v-show="isShow" class="alert-add-to-cart">
        <div class="over-lay">
            <div v-show="isExist==false">
                <div>
                    <i class="fas fa-check-circle"></i> 
                </div>
                <div>
                    Sản phẩm đã được thêm vào giỏ hàng!!!
                </div>
            </div>
            <div v-show="isExist==true">
                <div>
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div>
                    Sản phẩm đã tồn tại trong giỏ hàng!!!
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    watch: {
        isShow() {
            this.hideAlert()
        }
    },
    data(){
        return{
            isExist: false,
            isShow: false
        }
    },
    mounted(){
        this.eventBus.$on('showAlertSuccessAddToCart', (isExist) => {
            this.isShow = true;
            this.isExist = isExist;
        });
        this.eventBus.$on('showAlertWarnAddToCart', (isExist) => {
            this.isShow = true;
            this.isExist = isExist;
        });
    },
    methods: {
        hideAlert(){
            setTimeout(() => {
                this.isShow = false
            }, 1500);
        }
    }
}
</script>

<style scoped>
    .alert-add-to-cart{
        width: 300px;
        height: 130px;
        color: white;
        background-color: transparent;
        text-align: center;
        position:fixed;
        z-index: 2;
        top: 50%;
        left: 50%;
        margin-left: -100px;
        border-radius: 5px;
        font-size: 1.2rem;
    }

    .over-lay{
        background-color: black;
        opacity: 0.5;
        width: 100%;
        height: 100%;
        border-radius: 5px;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .alert-add-to-cart i{
        font-size: 2rem;
    }
</style>