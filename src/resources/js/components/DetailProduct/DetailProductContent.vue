<template>
    <div class="detail-product-content">
        <div class="product-name">đàn piano điện casio ae-550m</div>
        <div class="product-brand">Thương hiệu: Casio | Mã SP: FP10</div>
        <div>
            Đánh giá: 
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="product-price">12.000.000đ</div>
        <div class="product-information">Đàn Piano Điện Casio AE-550M là một sản phẩm vô cùng độc đáo trong dòng sản phẩm Celviano của hàng piano Casio nổi tiếng Nhật Bản. Ngoài việc thừa hưởng các tính năng cơ bản và âm thanh vượt trội của dòng sản phẩm Celviano, AE-550M còn sở hữu một ngoài hình và thiết kế độc đáo hứa hẹn sẽ đem lại cho bạn một cây piano ưng ý trong tầm giá.</div>
        <span  class="btn-view-add-to-cart">Thêm Vào Giỏ Hàng</span>
    </div>
</template>

<script>
export default {
    data() {
       return {
            
       }
    }
}
</script> 

<style scoped>
    .product-name{
        text-transform: uppercase;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .product-price{
        font-size: 1.5rem;
        font-weight: bold;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .btn-view-add-to-cart{
        background-color:yellowgreen ;
        display: block;
        color: white;
        padding-bottom: 8px;
        padding-top: 8px;
        width: 150px;
        font-weight: bold;
        text-align: center;
        border-radius: 5px;
        margin-top: 40px;
    }

    .btn-view-add-to-cart:hover{
        opacity: 0.8;
    }
</style> 