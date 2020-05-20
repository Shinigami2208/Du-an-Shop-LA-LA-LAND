<template>
    <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li class="dropdown" @mouseover.stop="show = true" @mouseleave.stop="show = false">
            <button class="dropbtn">Dropdown </button>
            <transition name="dropdown">
                <ul class="dropdown-content" v-if="show">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </transition>
        </li> 
  </ul> 
</template>

<script>
export default {
    data() {
    return {
        show: false
    }
  }
}
</script>

<style scoped>
    .dropdown-enter,
    .dropdown-leave-to {
    transform: scaleY(0.7);
    opacity: 0;
    }
    
    .dropdown-enter-to,
    .dropdown-leave {
    opacity: 1;
    transform: scaleY(1);
    }
    
    .dropdown-enter-active,
    .dropdown-leave-active {
    transition: all 0.3s ease-out;
    transform-origin: top center;
    }
</style>