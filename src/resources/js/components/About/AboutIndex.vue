<template>
    <div class="container">
        <DropdownMenu />
        <div class="row justify-content-center">
             <FormFlipping />
        </div>
    </div>
</template>

<script>
    import DropdownMenu from './DropdownMenu.vue';
    import FormFlipping from './FormFlipping.vue';
    export default {
        components: {
            DropdownMenu,
            FormFlipping
        }
    }
</script>
