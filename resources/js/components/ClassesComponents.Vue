<template>
    <NavBarComponent/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Sudarshan Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <FooterComponent></FooterComponent>
</template>

<script>
import NavBarComponent from "./NavBarComponent.vue";
import FooterComponent from "./FooterComponent.vue";
import ProfilePicture from "/images/sudarshanProfile.jpg";

    export default {
        components: {
            'NavBarComponent': NavBarComponent,
            'FooterComponent': FooterComponent
        },
        data: function () {
            return {
                ProfilePicture: ProfilePicture
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
#profile-pic{
    border-radius: 50%;
    height: 400px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#profile-pic:hover{
    box-shadow: 0 4px 8px 0 rgba(114, 173, 216, 0.8), 0 6px 20px 0 rgba(114, 173, 216, 0.8);
}
</style>
