<template>
    <div class="detail-product-content">
        <div class="product-name">{{product.name}}</div>
        <div class="product-brand">Thương hiệu: {{product.brand}} | Mã SP: {{product.code}}</div>
        <div>
            Đánh giá: 
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="product-price">{{product.price | dinhDangTien('.')}}</div>
        <div class="product-information">{{product.des}}</div>
        <div class="product-quantity">
            <div class="product-quantity-title">Số lượng:</div>
            <div class="product-quantity-contain">
                <button class="quantity-icon">+</button>
                <div class="quantity-number">1</div>
                <button class="quantity-icon">-</button>
            </div>
        </div>
        <button  class="btn-view-add-to-cart-type-1">Thêm Vào Giỏ Hàng</button>
    </div>
</template>

<script>
export default {
    data() {
       return {
            product: {
                name: 'đàn piano điện casio ae-550m',
                brand: 'Casio',
                code: 'FP10',
                vote: 4.7,
                price: '12000000',
                des: 'Đàn Piano Điện Casio AE-550M là một sản phẩm vô cùng độc đáo trong dòng sản phẩm Celviano của hàng piano Casio nổi tiếng Nhật Bản. Ngoài việc thừa hưởng các tính năng cơ bản và âm thanh vượt trội của dòng sản phẩm Celviano, AE-550M còn sở hữu một ngoài hình và thiết kế độc đáo hứa hẹn sẽ đem lại cho bạn một cây piano ưng ý trong tầm giá.',
                }
       }
    },
    mounted(){

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

    .btn-view-add-to-cart-type-1{
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
        border: none;
    }

    .btn-view-add-to-cart:hover{
        opacity: 0.8;
    }

    .product-quantity{
        margin-top: 30px;
    }

    .product-quantity-contain{
        display: flex;
        align-items: center;
    }

    .quantity-icon{
    background-color: chartreuse;
    border-radius: 3px;
    text-align: center;
    border: none;
    flex-basis: 30px;
    color: white;
    }

    .quantity-number{
        flex-basis: 35px;
        text-align: center;
    }

    .quantity-icon:hover{
        opacity: 0.5;
    }

    .product-quantity{
        display: flex;

    }

    .product-quantity-title{
        flex-basis: 100px;
    }

    .product-quantity-contain{
        flex-basis: 300px;
    }
</style> 