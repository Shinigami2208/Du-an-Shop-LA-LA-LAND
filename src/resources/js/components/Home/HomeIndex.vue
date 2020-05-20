<template>
    <div>
        <Banner />
        <FeaturePhotos />
        <PromotionProductList />
        <BestSalerProductList />
        <NewProductList />
        <FeatureBrandList />
        <LatestBlog />
        <ServiceList />
        <Footer />
        <AlertAddProductToCart />
    </div>
</template>

<script>
    import Banner from '../General/Banner.vue';
    import FeaturePhotos from '../General/FeaturePhotos.vue';
    import NewProductList from './NewProductList.vue';
    import PromotionProductList from './PromotionProductList.vue';
    import BestSalerProductList from './BestSalerProductList.vue';
    import FeatureBrandList from './FeatureBrandList.vue';
    import LatestBlog from './LatestBlog.vue';
    import ServiceList from '../General/ServiceList.vue';
    import Footer from '../General/Footer.vue';
    import AlertAddProductToCart from '../General/AlertAddProductToCart.vue';
    export default {
        mounted() {
        },
        components: {
            Banner,
            NewProductList,
            FeaturePhotos,
            PromotionProductList,
            BestSalerProductList,
            FeatureBrandList,
            LatestBlog,
            ServiceList,
            Footer,
            AlertAddProductToCart

        }
    }
</script>
<style scoped>
   
</style>
