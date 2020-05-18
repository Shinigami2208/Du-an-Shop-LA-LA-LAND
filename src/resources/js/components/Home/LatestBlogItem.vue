<template>
    <div class="latest-in-blog-item">
                <a href="http://google.com" class="latest-in-blog-item-photo"></a>
                <div class="latest-in-blog-item-title">Us yielding Fish sea night the said him two </div>
                <div class="latest-in-blog-item-des">Fill his waters wherein signs lieness waters. Second light gathered appear sixth</div>
                <a href="#" class="latest-in-blog-item-read-more">Xem Thêm <i class="fas fa-arrow-right"></i></a>
            </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.latest-in-blog-item{
    flex-grow: 1;
    margin-right: 20px;
}

.latest-in-blog-item:last-child{
    margin-right: 0px;
}

.latest-in-blog-item-photo{
    background-image: url('https://i.pinimg.com/564x/c2/2c/7a/c22c7a6f3a787c165c071979cbbd7991.jpg');
    background-size: cover;
    background-position: center center;
    height: 200px;
    width: 100%;
    border-radius: 5px;
    margin-bottom: 20px;
    display: block;
}

.latest-in-blog-item-title{
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.latest-in-blog-item-des{
    font-size: 0.8rem;
    font-style: italic;
    margin-bottom: 10px;
}

.latest-in-blog-item-read-more{
    font-weight: bold;
    color: black;
    font-size: 0.7rem;
    font-style: italic;
}

.latest-in-blog-item-read-more:hover{
    text-decoration: none;
    opacity: 0.5;
}
</style>