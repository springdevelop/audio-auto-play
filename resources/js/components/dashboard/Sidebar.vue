<template >
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
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
        </ul>
    </div>
</nav>
</template>
<script>
import { CalendarIcon, MapIcon, HomeIcon, UserIcon, ActivityIcon } from 'vue-feather-icons'
export default {
    components: {
        CalendarIcon,
        MapIcon,
        HomeIcon,
        UserIcon,
        ActivityIcon
    },
}
</script>