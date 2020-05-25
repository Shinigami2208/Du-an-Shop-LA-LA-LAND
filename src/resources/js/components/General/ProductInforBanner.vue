<template>
    <div id="banner-infor" class="container-fluid product-infor">
        <!-- <div class="product-name">
            Đàn PIANO ĐIỆN CASIO AE-550
        </div>
        <div class="product-brand">
            Thương hiệu CASIO
        </div> -->
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
/* Banner */

/* Banner Product Information */

#banner-infor{
    height: 450px;
    background-image: url('../images/200726.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}

.product-infor{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color: white;
}

.product-name{
    font-size: 1.5rem;
    text-transform: uppercase;
    margin-bottom: 30px;
}

</style>