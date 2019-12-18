/*
|-------------------------------------------------------------------------------
| VUEX modules/auth.js
|-------------------------------------------------------------------------------
| The Vuex data store for the authentication
*/
import getters from './Auth/states'
import getters from './Auth/getters'
import mutations from './Auth/mutations'
import actions from './Auth/actions'

export const auth = {
    /*
        Defines the state being monitored for the module.
    */
    states,
    actions,
    mutations,
    getters
}
