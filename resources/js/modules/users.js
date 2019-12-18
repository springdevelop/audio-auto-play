/*
|-------------------------------------------------------------------------------
| VUEX modules/positions.js
|-------------------------------------------------------------------------------
| The Vuex data store for the positions
*/

import state from './user/states'
import getters from './user/getters'
import mutations from './user/mutations'
import actions from './user/actions'

export const users = {
    state,
    actions,
    mutations,
    getters
}