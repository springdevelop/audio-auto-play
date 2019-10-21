import Vue from 'vue';
import VueRouter from 'vue-router'

import Web from '@/js/pages/web/Layout';
import WebHome from '@/js/pages/web/Home';
import Dashboard from '@/js/pages/dashboard/Layout';
import DashboardHome from '@/js/pages/dashboard/Home';
import Calendars from '@/js/pages/dashboard/Calendars';
import Users from '@/js/pages/dashboard/Users';
import Positions from '@/js/pages/dashboard/Positions';
import IndexPositions from '@/js/pages/dashboard/position/Index';
import Stations from '@/js/pages/dashboard/Stations';
import IndexStations from '@/js/pages/dashboard/station/Index';


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'web',
            component: Web,
        },
        {
            path: '/dashboard',
            component: Dashboard,
            children: [{
                    path: '',
                    name: 'dashboard_home',
                    component: DashboardHome
                },
                {
                    path: 'calendars',
                    name: 'calendars',
                    component: Calendars
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
                    }]
                },
                {
                    path: 'stations',
                    component: IndexStations,
                    children: [{
                        path: '',
                        name: 'stations',
                        component: IndexPositions,
                    }]
                }
            ]
        },
    ]
})

export default router;