/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

// axios
window.axios = require('axios');

// import vue router
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// import routes from './Routes.js';

import HomeIndex from './components/Home/HomeIndex.vue';
import AboutIndex from './components/About/AboutIndex.vue';
import BlogIndex from './components/Blog/BlogIndex.vue';
import ContactIndex from './components/Contact/ContactIndex.vue';
import CartIndex from './components/Cart/CartIndex.vue';
import DetailProductIndex from './components/DetailProduct/DetailProductIndex.vue';
import AccountIndex from './components/Account/AccountIndex.vue';
import AccountProfile from './components/Account/AccountProfile.vue';
import AccountOrder from './components/Account/AccountOrder.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeIndex,
        },
        {
            path: '/about',
            name: 'about',
            component: AboutIndex,
        },
        {
            path: '/blog',
            name: 'blog',
            component: BlogIndex,
        },
        {
            path: '/contact',
            name: 'contact',
            component: ContactIndex,
        },
        {
            path: '/cart',
            name: 'cart',
            component: CartIndex,
        },
        {
            path: '/account',
            name: 'account',
            component: AccountIndex,
            children:[
                {
                    path:'/profile',
                    name:'profile',
                    component: AccountProfile
                },
                {
                    path:'/order',
                    name:'order',
                    component: AccountOrder
                },
            ]
        },
        {
            path: '/:product_slug.:product_id',
            name: 'detail_product',
            component: DetailProductIndex,
            params: true,
            props: true,
        },
    ]
});

// Event Bus
Vue.prototype.eventBus = new Vue();

// Lodash
Vue.prototype._ = require('lodash');
// Rewrite-URL
Vue.prototype.rewriteUrl = function rewriteUrl(title){
    var slug = "";
    // Change to lower case
    var titleLower = title.toLowerCase();
    // Letter "e"
    slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');
    // Letter "a"
    slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');
    // Letter "o"
    slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');
    // Letter "u"
    slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');
    // Letter "i"
    slug = slug.replace(/ị|ỉ|ì|í|ĩ/gi, 'i');
    // Letter "y"
    slug = slug.replace(/ý|ỷ|ỳ|ỵ|ỹ/gi, 'y');
    // Letter "d"
    slug = slug.replace(/đ/gi, 'd');
    // Trim the last whitespace
    slug = slug.replace(/\s*$/g, '');
    // Change whitespace to "-"
    slug = slug.replace(/\s+/g, '-');

    return slug.toUpperCase();
}

//  Filter

Vue.filter('dinhDangTien', function(soTien, phanCach){
    return soTien.toString().replace(/\B(?=(\d{3})+(?!\d))/g, phanCach) + 'đ';
});


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
