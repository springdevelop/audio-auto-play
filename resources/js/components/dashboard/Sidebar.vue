<template >
<nav class="sidebar">
    <div class="logo"><a href="#" class="simple-text">
        <div class="logo-img">
           <img src="@/img/logomoi.png" alt="logo hueic" />
        </div>
      </a>
    </div>
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <router-link tag="li" to="/dashboard" class="nav-item">
                <a class="nav-link active">
                    <home-icon size="1.5x" class="custom-class"></home-icon>
                    Dashboard
                </a>
            </router-link>
            <router-link tag="li" class="nav-item" to="/dashboard/calendars">
                <a class="nav-link" href="#">
                    <calendar-icon size="1.5x" class="custom-class"></calendar-icon>
                    Lịch phát
                </a>
            </router-link>
            <router-link tag="li" class="nav-item" to="/dashboard/positions">
                <a class="nav-link" href="#">
                    <map-icon size="1.5x" class="custom-class"></map-icon>
                    Địa điểm
                </a>
            </router-link>
            <router-link tag="li" class="nav-item" to="/dashboard/devices">
                <a class="nav-link" href="#">
                    <cpu-icon size="1.5x" class="custom-class"></cpu-icon>
                    Thiết bị
                </a>
            </router-link>
             <router-link tag="li" class="nav-item" to="/dashboard/stations">
                <a class="nav-link" href="#">
                    <activity-icon size="1.5x" class="custom-class"></activity-icon>
                    Kênh phát
                </a>
            </router-link>
            <router-link tag="li" class="nav-item" to="/dashboard/users">
                 <a class="nav-link" href="#">
                    <user-icon size="1.5x" class="custom-class"></user-icon>
                    Người dùng
                 </a>
            </router-link>
             <router-link tag="li" class="nav-item border-top" to="/dashboard/settings">
                 <a class="nav-link" href="#">
                    <settings-icon size="1.5x" class="custom-class"></settings-icon>
                    Cài đặt
                 </a>
            </router-link>
        </ul>
    </div>
</nav>
</template>
<script>
import { SettingsIcon, CalendarIcon, MapIcon, HomeIcon, UserIcon, ActivityIcon, CpuIcon } from 'vue-feather-icons'
export default {
    components: {
        CalendarIcon,
        SettingsIcon,
        MapIcon,
        HomeIcon,
        UserIcon,
        ActivityIcon,
        CpuIcon
    },
}
</script>

<style scoped>

.logo-img {
    padding: 5px;
    border-bottom: 1px solid hsla(0,0%,100%,.3);
}
.logo-img img{
    display: block;
    width: 100%;
    height: 50px;
    width: auto;
    margin: auto;
}
.sidebar{
    max-height: 100%;
    height: 100%;
    overflow: hidden;
    overflow-y: hidden;
}
.router-link-exact-active .nav-link .feather,
.router-link-exact-active .nav-link{
    color: #B3562F;
    position: relative;
}
.router-link-exact-active .nav-link::after{
    content: "";
    border-right: 1em solid #f4f3ef;
    border-top: 1em solid transparent;
    border-bottom: 17px solid transparent;
    display: inline-block;
    position: absolute;
    right: 0;
    top: 0;
    transition: all .5s cubic-bezier(.29,1.42,.79,1);
    opacity: 1;
}
</style>