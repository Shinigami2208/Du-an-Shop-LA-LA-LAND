<template>
    <div class="detail-product-gallery">
        <div class="gallery">
            <!-- <img class="image" v-for="(image, i) in images" :src="image" :key="i" @mouseover="changeFeaturePhoto(image)"> -->
            <img class="image" v-for="(image, i) in images" :src="image" :key="i" @click="index = i" @mouseover="changeFeaturePhoto(image)">
            <vue-gallery-slideshow :images="images" :index="index" @close="index = null" ></vue-gallery-slideshow>
        </div>
        <img class="feature-photo" :src="featurePhoto" />
    </div>
</template>

<script>
import VueGallerySlideshow from 'vue-gallery-slideshow';

export default {
    data() {
       return {
            images: [
            'https://placekitten.com/801/800',
            'https://placekitten.com/802/800',
            'https://placekitten.com/803/800',
            'https://placekitten.com/804/800',
            ],
            index: null,
            featurePhoto: '',
       }
    },

    components: {
        VueGallerySlideshow
    },
    methods: {
        changeFeaturePhoto(image){
            this.featurePhoto = image;
        }
    },
    mounted() {
            this.featurePhoto = this.images['0'];
  },
}
</script> 

<style scoped>

    .image:first-child{
         margin-top: 0px;
     }
   .image {
    width: 100px;
    height: 100px;
    background-size: cover;
    cursor: pointer;
    margin: 5px;
    border-radius: 3px;
    border: 1px solid lightgray;
    object-fit: contain;
    }

    .detail-product-gallery{
        display: flex;
    }

    .gallery{
        flex-basis: 110px;
    }

    .feature-photo{
        flex-grow: 1;
        height: 400px;
    }
</style> 