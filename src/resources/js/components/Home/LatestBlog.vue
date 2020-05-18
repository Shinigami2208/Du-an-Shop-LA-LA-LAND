<template>
  <div id="latest-in-blog" class="latest-in-blog container">
        <div class="row gutter-5">
            <div class="section-title col-12">
                Bài viết mới nhất
            </div>
        </div>
        <div class="row gutter-5">
            <div class="col-4">
                <LatestBlogItem />
            </div>
            <div class="col-4">
                <LatestBlogItem />
            </div>
            <div class="col-4">
                <LatestBlogItem />
            </div>
        </div>
        <div class="row">
            <div class="col-12 discovery-more">
                <a href="http://google.com" class="discovery-more-content">
                    <div>Xem Thêm  <i class="fas fa-arrow-right"></i></div>
                    <div class="discovery-more-border"></div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import LatestBlogItem from './LatestBlogItem.vue'; 
export default {
    components: {
        LatestBlogItem
    }
}
</script>

<style scoped>
    /* Lastest In Blog */

.latest-in-blog{
    padding-top: 60px;
}

</style>