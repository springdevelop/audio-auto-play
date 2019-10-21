/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/stations.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/stations.js';

export default {
    loadStations({ commit }) {
        return new Promise((resolve, reject) => {
            commit('setGetStationsStatus', 1)
            API.index()
                .then(resp => {
                    commit('setStations', resp.data.data)
                    commit('setGetStationsStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetStationsStatus', 3)
                    reject(err)
                })
        })
    },
    loadStation({ commit }, id) {
        return new Promise((resolve, reject) => {
            commit('setGetStationStatus', 1)
            API.show(id)
                .then(resp => {
                    commit('setStation', resp.data.data)
                    commit('setGetStationStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetStationStatus', 3)
                    reject(err)
                })
        })
    },
    updateStation({ commit, state }, data) {
        return new Promise((resolve, reject) => {
            API.update(data.id, data)
                .then(function(resp) {
                    console.log("test")
                    commit('setUpdateStationStatus', 2)
                    console.log(state.updateStationStatus)
                    resolve(resp)
                })
                .catch(function() {
                    commit('setUpdateStationStatus', 3)
                    reject(err)
                });
        })

    },
    createStation({ commit }, data) {
        return new Promise((resolve, reject) => {
            commit('setCreateStationStatus', 1)
            API.store(data)
                .then(function(resp) {
                    commit('setCreateStationStatus', 2)
                    resolve(resp)
                })
                .catch(function() {
                    commit('setCreateStationStatus', 3)
                    reject(err)
                });
        })
    },

}