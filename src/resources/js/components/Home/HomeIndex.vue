<template>
    <div class="container">
        <div class="row justify-content-center">
            <h2>Trang chủ</h2>
            <NewProductList></NewProductList>
            
        </div>
    </div>
</template>

<script>
    import NewProductList from './NewProductList.vue';
    export default {
        mounted() {
        },
        components: {
            NewProductList,
        }
    }
</script>
