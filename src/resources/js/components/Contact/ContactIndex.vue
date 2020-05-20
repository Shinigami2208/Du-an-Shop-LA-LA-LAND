<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liên hệ</div>

                    <div class="card-body">
                       Contact
                    </div>
                    <div>
                        {{product.name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {id: 1, name: 'aaaa'}
            }
        },
        mounted() {
            this.eventBus.$on('addToCart', (product) =>{
                this.product = product;
                console.log(this.product);
                console.log('aa');
            });
        }
    }
</script>
