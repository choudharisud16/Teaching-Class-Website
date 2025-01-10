<template>
    <NavBarComponent/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <FooterComponent/>
</template>

<script>
import NavBarComponent from "./NavBarComponent.vue";
import FooterComponent from "./FooterComponent.vue";

    export default {
        components: {
            'NavBarComponent': NavBarComponent,
            'FooterComponent': FooterComponent
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
