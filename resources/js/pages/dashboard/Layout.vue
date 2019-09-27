<template>
<div>
    <navigation></navigation>
     <div class="container-fluid">
        <div class="row">
            <sidebar></sidebar>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                 <router-view></router-view>
            </main>
        </div>
    </div>
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
