<template>
    <div class="container detail-product-main">
        <div class="row">
            <div class="col-6">
                <DetailProductGallery />
            </div>
            <div class="col-6">
                <DetailProductContent />
            </div>
        </div>
    </div>
</template>

<script>
import DetailProductGallery from './DetailProductGallery.vue';
import DetailProductContent from './DetailProductContent.vue';

export default {
    data() {
       return {
            
       }
    },

    components: {
        DetailProductGallery,
        DetailProductContent
    },
}
</script> 

<style scoped>
.detail-product-main{
    padding-top: 30px ;
}
</style> 