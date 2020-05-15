<template>
    <div class="container">
        <div class="row justify-content-center">
           <h3>Liên hệ</h3>
           <ul>
               <li>
                   <router-link :to="{name: 'home'}">Trang chủ</router-link>
                   <router-link :to="{name: 'blog'}">Blog</router-link>
                   <router-link :to="{name: 'about'}">Giới thiệu</router-link>
                   <router-link :to="{name: 'contact'}">Liên hệ</router-link>
               </li>
           </ul>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
