import Vue from 'vue';
import VueRouter from 'vue-router'

import Web from '@/js/pages/web/Layout';
import WebHome from '@/js/pages/web/Home';
import Dashboard from '@/js/pages/dashboard/Layout';
import DashboardHome from '@/js/pages/dashboard/Home';
import Calendars from '@/js/pages/dashboard/Calendars';
import IndexCalendars from '@/js/pages/dashboard/calendars/Index';
import Users from '@/js/pages/dashboard/Users';
import Positions from '@/js/pages/dashboard/Positions';
import IndexPositions from '@/js/pages/dashboard/position/Index';
import Devices from '@/js/pages/dashboard/Devices';
import IndexDevices from '@/js/pages/dashboard/device/Index';
import Stations from '@/js/pages/dashboard/Stations';
import IndexStations from '@/js/pages/dashboard/station/Index';
import Settings from '@/js/pages/dashboard/Settings';
import IndexSettings from '@/js/pages/dashboard/setting/Index';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            component: Web,
            children: [{
                    path: '',
                    name: 'web_Home',
                    component: WebHome
                }]
        },
        {
            path: '/dashboard',
            component: Dashboard,
            children: [{
                    path: '',
                    name: 'dashboard_home',
                    component: DashboardHome,
                    meta: {
                        title: 'Trang quản lý',
                    }
                },
                {
                    path: 'calendars',
                    component: Calendars,
                    children: [
                        {
                            path: '',
                            name: 'calendars',
                            component: IndexCalendars,
                            meta: {
                                title: 'Lịch phát',
                            }
                        }
                    ],
                    
                },
                {
                    path: 'users',
                    name: 'users',
                    component: Users
                },
                {
                    path: 'positions',
                    component: Positions,
                    children: [{
                        path: '',
                        name: 'positions',
                        component: IndexPositions,
                        meta: {
                            title: 'Địa điểm',
                        }
                    }]
                },
                {
                    path: 'devices',
                    component: Devices,
                    children: [{
                        path: '',
                        name: 'devices',
                        component: IndexDevices,
                        meta: {
                            title: 'Thiết bị',
                        }
                    }]
                },
                {
                    path: 'stations',
                    component: Stations,
                    children: [{
                        path: '',
                        name: 'stations',
                        component: IndexStations,
                        meta: {
                            title: 'Kênh phát',
                        }
                    }]
                },
                {
                    path: 'settings',
                    component: Settings,
                    children: [{
                        path: '',
                        name: 'settings',
                        component: IndexSettings,
                        meta: {
                            title: 'Cài đặt',
                        }
                    }]
                }
            ]
        },
    ]
})

export default router;