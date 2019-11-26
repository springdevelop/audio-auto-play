/*
|-------------------------------------------------------------------------------
| VUEX modules/positions.js
|-------------------------------------------------------------------------------
| The Vuex data store for the positions
*/

import state from './device/states'
import getters from './device/getters'
import mutations from './device/mutations'
import actions from './device/actions'

export const devices = {
    state,
    actions,
    mutations,
    getters
}