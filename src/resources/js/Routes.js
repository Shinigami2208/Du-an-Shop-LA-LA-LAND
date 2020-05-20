import HomeIndex from './components/Home/HomeIndex.vue';
import AboutIndex from './components/About/AboutIndex.vue';
import BlogIndex from './components/Blog/BlogIndex.vue';
import ContactIndex from './components/Contact/ContactIndex.vue';

export default {
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
    ]
};