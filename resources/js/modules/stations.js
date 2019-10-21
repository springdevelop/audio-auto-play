/*
|-------------------------------------------------------------------------------
| VUEX modules/stations.js
|-------------------------------------------------------------------------------
| The Vuex data store for the positions
*/

import state from './station/states'
import getters from './station/getters'
import mutations from './station/mutations'
import actions from './station/actions'

export const stations = {
    state,
    actions,
    mutations,
    getters
}