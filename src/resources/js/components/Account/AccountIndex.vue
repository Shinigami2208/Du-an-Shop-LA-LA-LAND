<template>
    <div>
        <Banner />
        <ProductInforBanner />
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <AccountSideBar />
                </div>
                <div class="col-10">
                    <router-view></router-view>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
import Banner from '../General/Banner';
import Footer from '../General/Footer';
import ProductInforBanner from '../General/ProductInforBanner';
import AccountSideBar from './AccountSideBar';

export default {
    components: {
        Banner,
        Footer,
        AccountSideBar,
        ProductInforBanner
    }
}
</script>

<style>

</style>