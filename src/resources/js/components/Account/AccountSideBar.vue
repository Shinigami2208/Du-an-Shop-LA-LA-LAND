<template>
    <ul>
        <li>
            <router-link :to="{name: 'profile'}">Tài Khoản Của Tôi</router-link>
        </li>
        <li>
            <router-link :to="{name: 'order'}">Đơn Mua</router-link>
        </li>
    </ul>
</template>

<script>
export default {

}
</script>

<style scoped>
    a{
        text-decoration: none;
        color: black;
    }
</style>