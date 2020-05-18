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
