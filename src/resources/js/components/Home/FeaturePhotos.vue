<template>
    <div id="featured-photo" class="container-flex">
        <div class="row-flex">
            <div class="featured-photo-child-1"></div>
            <div class="featured-photo-child-2"></div>
        </div>
        <div class="row-flex-nowrap featured-photo-under">
            <div class="featured-photo-child-3 featured-photo-under-item">
                <div class="email-Subcribe-title">Đăng ký nhận tin</div>
                <div class="email-Subcribe-des">Nhận ngay 10% giảm giá ngay khi đăng ký</div>
                <div class="email-Subcribe-form">
                    <input type="text" name="subcribe email" placeholder="Enter Email*" class="input-email-Subcribe form-control" style="color: #AFB0AF">
                    <a class="button-email-Subcribe" href="#">Đăng ký</a>
                </div>
            </div>
            <div class="featured-photo-child-4 featured-photo-under-item">
                <div class="piano-collection-title">Bộ sưu tập Piano</div>
                <a href="#" class="collection-link">Mua ngay <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="featured-photo-child-5 featured-photo-under-item">
                <div class="guitar-collection-title">Bộ sưu tập Guitar</div>
                <a href="#" class="collection-link">Mua ngay <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
    .featured-photo-child-1{
        background-image: url('../images/piano-wper.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        flex-grow: 2;
        height: 500px;
        margin-right: 10px;
    }

    .featured-photo-child-2{
        background-image: url('../images/ti-ba.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        flex-grow: 1;
        height: 500px;
    }

    .featured-photo-under{
        margin-top: 10px;
        color: white;
    }

    .email-Subcribe-title{
        font-size: 1.2rem;
        text-transform: uppercase;
    }

    .email-Subcribe-des{
        width: 200px;
        text-align: center;

    }


    .email-Subcribe-form{
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #AFB0AF;
        border-radius: 5px;

    }

    .button-email-Subcribe{
        color: white;
        padding-right: 10px;
        flex-basis: 100px;
    }

    .button-email-Subcribe:hover{
        color: bisque;
        text-decoration: none;
    }

    .email-Subcribe-form input{
        background: transparent;
        border: none;
        box-shadow: none;
        flex-grow: 1;
    }

    .email-Subcribe-form input:focus{
        background: transparent;
        border: none;
        box-shadow: none;
    }

    .featured-photo-under-item{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        height: 200px;
        margin-right: 10px;
    }

    .featured-photo-child-3{
        background-image: url('../images/background-parrten.jpg');
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        flex-basis: 300px;
    }

    .featured-photo-child-4{
        background-image: url('../images/1583311534fca8eae3fb31045224a991.jpg');
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-grow: 1;
    }

    .featured-photo-child-5{
        background-image: url('../images/guitar2.jpg');
        margin-right: 0px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-grow: 1;
    }

    .collection-link{
        color: white;
        margin-top: 10px;
        font-size: 0.8rem;
    }
</style>