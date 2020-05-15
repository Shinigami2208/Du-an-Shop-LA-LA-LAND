<template>
    <div class="container">
        <div class="row justify-content-center">
           <h3>Giỏ hangfgggggggggggg</h3>
           <table width="100%" border="1">
               <tr>
                   <th>Ten San Pham</th>
                   <th></th>
               </tr>
               <tr v-for="product in products" :key="product.id">
                   <td>{{product.name}}</td>
                   <td><button @click="addToCart(product)">Mua</button></td>
               </tr>
           </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['productId'],
        data() {
            return {
                products: [
                    {id: 1, name: 'Ahiihi'},
                    {id: 2, name: 'Ahehe'}
                ]
            }
        },
        mounted() {},
        methods: {
            addToCart(product){
                console.log(product);
                this.eventBus.$emit('addToCart', product);
            }
        }
    }
</script>
