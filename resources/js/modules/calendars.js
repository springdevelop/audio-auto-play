/*
|-------------------------------------------------------------------------------
| VUEX modules/calendars.js
|-------------------------------------------------------------------------------
| The Vuex data store for the calendars
*/

import states from './calendar/states'
import getters from './calendar/getters'
import mutations from './calendar/mutations'
import actions from './calendar/actions'

export const calendars = {
    states,
    actions,
    mutations,
    getters
}