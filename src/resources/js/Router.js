import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeIndex from './components/Home/HomeIndex.vue';
import AboutIndex from './components/About/AboutIndex.vue';
import BlogIndex from './components/Blog/BlogIndex.vue';
import ContactIndex from './components/Contact/ContactIndex.vue';
import CartIndex from './components/Cart/CartIndex.vue';
import DetailProductIndex from './components/DetailProduct/DetailProductIndex.vue';
import AccountIndex from './components/Account/AccountIndex.vue';
import AccountProfile from './components/Account/AccountProfile.vue';
import AccountOrder from './components/Account/AccountOrder.vue';

Vue.use(VueRouter)

export default new VueRouter({
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
            children: [
                {
                    path: '/profile',
                    name: 'profile',
                    component: AccountProfile
                }, 
                {
                    path: '/order',
                    name: 'order',
                    component: AccountOrder
                }, 
            ]
        },
        {
            path: '/:product_slug:product_id',
            name: 'detail_product',
            component: DetailProductIndex,
            params: true,
            props: true,
        },    
    ],
  })