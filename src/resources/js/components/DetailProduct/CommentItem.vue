<template>
    <div class="comment-item">
        <div class="comment-user">Bùi Hữu Hoàng</div>
        <div class="comment-content">Đàn này cũng đượtttttttttttttttttttttttttttttt</div>
    </div>
</template>

<script>

    export default {
        mounted() {
        },
        components: {
            
        }
    }
</script>
<style scoped>

    .comment-item{
        margin-top: 20px;
        display: flex;
        height: 40px;
        align-items: center;
        margin-bottom: 30px;
    }

    .comment-user{
        flex-basis: 120px;
        font-size: 0.8rem;
        font-weight: bold;
        border: 1px solid gainsboro;
        text-align: center;
        border-radius: 5px;
        margin-right: 20px;
    }

    .comment-content{
        flex-grow: 1;
    }
</style>
