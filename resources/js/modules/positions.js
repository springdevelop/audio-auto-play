/*
|-------------------------------------------------------------------------------
| VUEX modules/positions.js
|-------------------------------------------------------------------------------
| The Vuex data store for the positions
*/

import state from './position/states'
import getters from './position/getters'
import mutations from './position/mutations'
import actions from './position/actions'

export const positions = {
    state,
    actions,
    mutations,
    getters
}