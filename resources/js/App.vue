<template>
    <div class="container">
        <div>
            <router-view v-slot="{ Component }">
                <transition>
                    <component :is="Component" />
                </transition>
            </router-view>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script type="text/javascript">
    export default{
    }
</script>