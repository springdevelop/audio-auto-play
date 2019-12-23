<template>
<div class="wrapper">
    <loading transition="bounce-in" loader="dots" color="#E45124" class="loading-page" :active.sync="isLoading" 
        :can-cancel="true" 
        :is-full-page="fullPage"></loading>
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
    import Loading from 'vue-loading-overlay';
    import 'vue-loading-overlay/dist/vue-loading.css';
    export default {
        components: {
            Navigation,  Sidebar, Loading
        },
        data() {
            return {
                fullPage: true
            }
        },
        computed: {
            isLoading: function() {
                return this.$store.getters.getLoading;
            },
        },
        mounted () {
            this.$store.dispatch('makeLoading', true)
        },
        beforeUpdate() {
            setTimeout(() => {
                this.$store.dispatch('makeLoading', false)
            }, 500)
           
        }
    }
</script>
<style scoped>
.content{
    position: relative;
    padding: 1em;
}
.loading-page{
    animation: all 0.5 linear;
}
</style>
