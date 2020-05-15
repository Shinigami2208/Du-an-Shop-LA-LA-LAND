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
import Cart from './components/General/Cart.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeIndex,
            children: [
                {
                    path: '/cart',
                    name: 'cart',
                    component: Cart,
                },
            ]
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
    ]
});

// Event Bus
Vue.prototype.eventBus = new Vue();

// Lodash
Vue.prototype._ = require('lodash');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('hot-product-list', require('./components/Home/NewProductList.vue').default);
Vue.component('menu', require('./components/General/Menu.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
