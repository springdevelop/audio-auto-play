<template>
<div class="wrapper">
            <sidebar></sidebar>
            <main role="main" class="">
                <navigation></navigation>
                 <router-view class="content"></router-view>
            </main>
</div>
</template>

<script>
    import Navigation from '@/js/components/dashboard/Navigation.vue'
    import Sidebar from '@/js/components/dashboard/Sidebar.vue'
    export default {
        components: {
            Navigation,  Sidebar
        },
    }
</script>
<style scoped>
.content{
    position: relative;
    padding: 1em;
}
</style>
