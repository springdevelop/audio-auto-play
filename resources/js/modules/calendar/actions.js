/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/calendars.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/calendars.js';

export default {
    loadCalendars({ commit }) {
        return new Promise((resolve, reject) => {
            API.index()
                .then(resp => {
                    console(resp)
                    commit( 'setCalendars', resp.data.data )
                    commit( 'setGetCalendarsStatus', 2 )
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetCalendarsStatus', 3)
                    reject(err)
            })
        })
    },
    loadCalendar({ commit }) {
        return new Promise((resolve, reject) => {
            API.show()
                .then(resp => {
                    console(resp)
                    commit( 'setCalendar', resp.data.data )
                    commit( 'setGetCalendarStatus', 2 )
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetCalendarStatus', 3)
                    reject(err)
            })
        })
    },
}
