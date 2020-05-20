<template>
    <div id="footer"  class="container-flex footer">
            
            <div class="footer-content row-flex">
                <div class="footer-content-title" >La La Land: City of Stars</div>
                <ul class="footer-content-navigator-page">
                    <li><a href="#">Liện Hệ Với Chúng Tôi</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Tư Vấn Chọn Nhạc Cụ</a></li>
                    <li><a href="#">Vận Chuyển & Đổi Trả</a></li>
                    <li><a href="#">Câu Chuyện Của Chúng Tôi</a></li>
                </ul>
                <ul class="footer-content-navigator-icon">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                </ul>
            </div>
        </div>
</template>

<script>
export default {

}
</script>

<style scoped>
    /* Footer */

#footer{
    padding-top: 40px;
    background: rgb(131,58,180);
    background: linear-gradient(180deg, rgba(131,58,180,1) 0%, rgba(84,5,5,1) 0%, rgba(47,28,2,1) 100%);
    color: white;
}

.footer-content-title{
    font-size: 2rem;
    font-weight: bolder;
}

.footer-content-navigator-page li a{
    color: white;
    font-weight: bolder;
}

.footer-content-navigator-page li a:hover{
    text-decoration: none;
    opacity: 0.5;
}

.footer-content{
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
}

.footer-content ul li{
    display: inline-block;
}

.footer-content-navigator-page li {
    margin-right: 20px;
}

.footer-content-navigator-page li:last-child{
    margin-right: 0px;
}

.footer-content-navigator-icon li{
    margin-right: 10px;
}

.footer-content-navigator-icon a{
    color: antiquewhite;
}

.footer-content-navigator-icon a:hover{
    text-decoration: none;
    opacity: 0.5;
}
</style>