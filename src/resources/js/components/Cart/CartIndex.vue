<template>
    <div>
        <Banner />
        <ProductInforBanner />
        <ProductCartList />
        <ServiceList />
        <Footer />
    </div>
</template>

<script>
import Banner from '../General/Banner.vue';
import ProductInforBanner from '../General/ProductInforBanner.vue';
import ServiceList from '../General/ServiceList.vue';
import Footer from '../General/Footer.vue';
import ProductCartList from './ProductCartList.vue';
export default {
    components: {
        ProductInforBanner, 
        Banner,
        Footer,
        ServiceList,
        ProductCartList
    }
}
</script>

<style scoped>

</style>