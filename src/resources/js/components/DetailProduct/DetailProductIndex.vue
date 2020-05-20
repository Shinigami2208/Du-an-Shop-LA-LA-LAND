<template>
    <div>
        <Banner />
        <ProductInforBanner />
        <DetailProductMain />
        <DetailProductComment />
        <ProductRelate />
        <ProductViewed />
        <ServiceList />
        <Footer />
    </div>
</template>

<script>
    import Banner from '../General/Banner.vue';
    import Footer from '../General/Footer.vue';
    import ServiceList from '../General/ServiceList.vue';
    import ProductInforBanner from '../General/ProductInforBanner.vue';
    import DetailProductMain from './DetailProductMain.vue';
    import DetailProductComment from './DetailProductComment.vue';
    import ProductRelate from './ProductRelate.vue';
    import ProductViewed from './ProductViewed.vue';
    export default {
        props: ['product'],
        mounted() {
            console.log(this.$route.params);
            console.log(this.props);
        },
        components: {
            Banner,
            ProductInforBanner,
            DetailProductMain,
            DetailProductComment,
            ProductRelate,
            ProductViewed,
            Footer,
            ServiceList
        }
    }
</script>
<style scoped>
    
</style>
