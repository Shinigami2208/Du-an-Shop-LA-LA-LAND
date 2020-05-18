<template>
    <div class="service container-flex">
        <div class="row-flex">
            <div class="service-item service-item-child-1">
                <div class="service-item-logo"><i class="fas fa-truck-moving"></i></div>
                <div>
                    <div class="service-item-title">Miễn phí vận chuyển</div>
                    <div class="service-item-des">Tất cả đơn hàng từ $5000</div>
                </div>
            </div>
            <div class="service-item service-item-child-2">
                <div class="service-item-logo"><i class="fas fa-exchange-alt"></i></div>
                <div>
                    <div class="service-item-title">Miễn phí đổi trả</div>
                    <div class="service-item-des">Hoàn tiền trong vòng 30 ngày</div>
                </div>
            </div>
            <div class="service-item service-item-child-3">
                <div class="service-item-logo"><i class="fas fa-warehouse"></i></div>
                <div class="service-item-main">
                    <div class="service-item-title">Hơn 10.000 mẫu mã</div>
                    <div class="service-item-des">Đáp ứng tất cả nhu cầu của bạn</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
    /* Service */

.service{
    margin-top: 60px;
}

.service-item-title{
    font-weight: bold;
}

.service-item-des{
    color: #AFB0AF;
}

.service-item{
    flex-grow: 1;
    display: flex;
    align-items: center;
}

.service-item-child-1{
    background-color: whitesmoke;
    height: 80px;
}

.service-item-child-2{
    background-color: cyan;
}

.service-item-child-3{
    background-color: aliceblue;
}

.service-item-logo{
    flex-basis: 80px;
    text-align: center;
    color: #AFB0AF;
}

.service-item-main{
    flex-grow: 1;
}
</style>