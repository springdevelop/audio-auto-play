<template>
<nav class="navbar navbar-expand-lg navbar-light">
    <h2 class="text-uppercase">{{pageTitle}}</h2>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm" aria-label="Tìm kiếm"> -->
    <ul class="navbar-nav px-3 ml-auto">
          <router-link tag="li" class="nav-item" to="/">
            <a class="nav-link" href="">
                 <log-out-icon size="1.5x" class="custom-class"></log-out-icon>Đăng xuất
            </a>
            </router-link>
    </ul>
</nav>
</template>
<script>
import { LogOutIcon } from 'vue-feather-icons'
export default {
    components: {
        LogOutIcon
    },
    computed: {
        pageTitle() {
            return (this.$route.meta.title);
        }
    },
}
</script>
<style scoped>
.navbar{
    min-height: 61px;
    background-color: #f4f3ef;
    box-shadow: none;
    border-bottom: 1px solid #ddd;
    color: #66615b;
}
</style>