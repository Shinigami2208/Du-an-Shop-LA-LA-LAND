<template>
    <div>
        <Banner />
        <ProductInforBanner />   
        <ServiceList />
        <Footer />
    </div>
</template>

<script>
import Banner from '../General/Banner';
import ProductInforBanner from '../General/ProductInforBanner';
import ServiceList from '../General/ServiceList';
import Footer from '../General/Footer';
export default {
    components: {
        Banner,
        ProductInforBanner,
        ServiceList,
        Footer
    }
}
</script>

<style>

</style>