<template>
    <div id="banner" class="container-fluid" >
        <div id="menu" class="container-flex menu-flex">
            <div class="logo"></div>
            <ul class="menu-list" > 
                <li v-for="menu in menus" :key="menu.id">
                    <router-link :to='{name: menu.link}' class="menu-item">{{menu.name}}</router-link>
                </li>
            </ul>
            <div class="icon">
                <div class="icon-item icon-item-cart" @mouseover="isShowCartModal = true" @mouseleave.stop="isShowCartModal = false">
                    <router-link :to="{name: 'cart'}">
                        <i class="fas fa-shopping-cart"></i>
                    </router-link>
                    <CartModal v-show="isShowCartModal==true" />
                </div>
                <div class="icon-item"><a><i class="far fa-heart"></i></a></div>
                 <div class="icon-item icon-item-account">
                     <router-link :to="{name: 'profile'}"><i class="far fa-user"></i></router-link>
                     <ul class="account-dropdown">
                         <li>
                            <router-link :to="{name: 'profile'}">Tài Khoản Của Tôi</router-link>
                        </li>
                         <li>
                            <router-link :to="{name: 'order'}">Đơn Mua</router-link>
                        </li>
                         <li>
                            <a href="#">Đăng Xuất</a>
                        </li>
                     </ul>
                </div>
            </div>
        </div>
        <div id="filter-search" class="container-flex">
            <div class="row-flex  filter-search">
                <a href="#" class="select-category">
                    <i class="fas fa-bars"></i>
                    Tất cả danh mục
                </a>
                <input type="text" name="search" class="search-item-brand-input" placeholder="Tìm kiếm sản phẩm hoặc nhãn hiệu" />
                <div class="search-icon"><i class="fas fa-search "></i></div>
            </div>
        </div>
    </div>

</template>

<script>
import CartModal from './CartModal.vue';
export default {
    data() {
        return {
            menus: [
                {id: 1, name:"Trang Chủ", link:"home"},
                {id: 5, name: "Giỏ Hàng", link: "cart"},
                {id: 2, name: "Tin Tức", link: "blog"},
                {id: 3, name: "Giới Thiệu", link: "about"},
                {id: 4, name: "Liên Hệ", link: "contact"}
            ],
            isShowCartModal: false,
        }
    },
    components: {
        CartModal
    },
    methods: {
        changeShowCartModal(){
            this.isShowCartModal = true;
        }
    }
}
</script>

<style scoped>
/* Banner */

#banner{
    background-color: white;
    position: fixed;
    z-index: 1;
}

/* Menu */

.menu-list li{
    display: inline-block;
    margin: 12px;
}

.menu-flex{
    display: flex;
    align-items: center;
    height: 80px;
}

.logo{
    flex-basis: 50px;
    background-image: url('../images/logo.png');
    background-size: 100%;
    background-repeat: no-repeat;
    height: 50px;
}

.icon{
    flex-basis: 80px;
    display: flex;
    justify-content: space-between;
    font-size: 0.75rem;
}

.icon-item a{
    color: #AFB0AF;;
}

.menu-list{
    flex-grow: 1;
}

.menu-list  li a{
    font-size: 1.2rem;
    color: #554746;
    text-decoration: none;
}

.menu-list  li a:hover{
    opacity: 0.5;
}

.filter-search{
    height: 40px;
    line-height: 40px;
    text-align: center;
}

.filter-search a{
    color: white;
}

.select-category{
    flex-basis: 150px;
    background-color: black;
}

.select-category:hover{
    text-decoration: none;
}

.search-icon{
    flex-basis: 80px;
    font-size: 0.75rem;
    color:#AFB0AF;
    border: 1px solid #AFB0AF;
}

.search-item-brand-input{
    flex-grow: 1;
    padding-left: 10px;
    padding-right: 10px;
}

#filter-search{
    margin-bottom: 20px;
}

/* Cart Modal */
.icon-item-cart{
    position: relative;
}

/* Account Modal */
.icon-item-account{
    position: relative;
}
.account-dropdown a:hover{
    text-decoration: none;
    opacity: 0.7;
}

.account-dropdown a{
    color: black;
}

.account-dropdown{
    width: 120px;
    height: 75px;
    background-color: aliceblue;
    position: absolute;
    overflow: hidden;
    text-align: left;
    border: 1px solid yellowgreen;
    border-radius: 10px;
    padding-left: 5px;
    padding-right: 5px;
    right: -100%;
    display: flex;
    justify-content: space-evenly;
    flex-direction: column;
    transition: all 0.3s ease-out;
    display: none;
}

.icon-item-account:hover .account-dropdown{
    display: block;
}



</style>