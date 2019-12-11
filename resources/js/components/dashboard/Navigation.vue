<template>
<nav class="navbar navbar-expand-lg navbar-light">
    <h2 class="text-uppercase">{{pageTitle}}</h2>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm" aria-label="Tìm kiếm"> -->
    <ul class="navbar-nav px-3 ml-auto">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="">Đăng xuất</a>
        </li>
    </ul>
</nav>
</template>
<script>
export default {
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