<template>
    <div>
        <Banner />
        <ProductInforBanner />
        <Footer />
    </div>
</template>

<script>
import Banner from '../General/Banner';
import Footer from '../General/Footer';
import ProductInforBanner from '../General/ProductInforBanner';
import Pagination from '../General/Pagination';
export default {
    components: {
        Banner,
        Footer,
        ProductInforBanner,
        Pagination
    }
}
</script>

<style>

</style>