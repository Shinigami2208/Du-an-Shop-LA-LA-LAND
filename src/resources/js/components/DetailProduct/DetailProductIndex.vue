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
        data(){
            return {
                product_id: null,
            }
        },
        props: ['product'],
        mounted() {
            this.product_id = this.$route.params.product_id;
            // this.getDetailProduct(this.product_id);
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
        },
        // methods: {
        //     getDetailProduct(product_id){
        //         console.log(product_id)
        //         axios.get('/detail-product', {
        //             params: {
        //             product_id: product_id
        //             }
        //         })
        //         .then( (response) => {
        //             console.log(response);
        //         })
        //         .catch((error) => {
        //             console.log(error);
        //         })
        //     }
        // }
    }
</script>
<style scoped>
    
</style>
