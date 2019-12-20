require('./bootstrap')
window.Vue = require('vue')
Vue.prototype.$http = axios

import PaperDashboard from "./plugins/paperDashboard";
// import "vue-notifyjs/themes/default.css";

import 'vue-search-select/dist/VueSearchSelect.css'
import Router from '@/js/routes.js'
import App from '@/js/views/App'
import store from '@/js/store.js'

Vue.use(PaperDashboard);

const app = new Vue({
    el: '#app',
    router: Router,
    store,
    render: h => h(App),
})

export default app
