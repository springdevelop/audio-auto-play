/*
|-------------------------------------------------------------------------------
| VUEX store.js
|-------------------------------------------------------------------------------
| Builds the data store from all of the modules for the Roast app.
*/
/*
  Adds the promise polyfill for IE 11
*/
require('es6-promise').polyfill();

import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)

import { positions } from '@/js/modules/positions.js';
import { devices } from '@/js/modules/devices.js';
import { stations } from '@/js/modules/stations.js';
import { modal } from '@/js/modules/modal.js';
import { loading } from '@/js/modules/loading.js';

export default new Vuex.Store({
    modules: {
        stations,
        positions,
        devices,
        modal,
        loading
    }
});