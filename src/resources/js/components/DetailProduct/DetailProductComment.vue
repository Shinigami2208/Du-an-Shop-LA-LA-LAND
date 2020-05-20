<template>
    <div class="container detail-product-comment">
        <div class="row">
            <div class="col-6">
                <div class="comment-title">BÌNH LUẬN</div>
                <div class="border-section"></div>
                <div class="counter-comment">1 bình luận</div>
                <CommentItem />
                <form action="#" method="post">
                    <input type="text" name="input-comment" id="" placeholder="Thêm bình luận" class="form-control">
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import CommentItem from './CommentItem.vue';

    export default {
        mounted() {
        },
        components: {
            CommentItem,
        }
    }
</script>
<style scoped>
    .detail-product-comment{
        padding-top: 20px;
        margin-top: 20px;
    }

    .comment-title{
        text-transform: uppercase;
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .comment-item{
        margin-top: 20px;
        display: flex;
        height: 40px;
        border: 1px solid gainsboro;
        align-items: center;
        margin-bottom: 30px;
    }

    .comment-user{
        flex-basis: 120px;
    }

    .comment-content{
        flex-grow: 1;
    }
</style>
