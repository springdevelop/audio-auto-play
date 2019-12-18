/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/positions.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/positions.js';

export default {
    initPosition({ commit }, parent_id = 0) {
        return new Promise((resolve) => {
            commit('setGetPositionStatus', 0)
            var position = { id: null, name: 'Nhập tên', desc: 'Nhập mô tả ngắn', parent_id: parent_id, groups_id: 1 }
            commit('setPosition', position)
            resolve(position)
        })
    },
    initPositions({ commit }) {
        commit('setPositions', [])
    },
    loadPositions({ commit }) {
        return new Promise((resolve, reject) => {
            commit('setGetPositionsStatus', 1)
            API.all()
                .then(resp => {
                    commit('setPositions', resp.data.data)
                    commit('setGetPositionsStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetPositionsStatus', 3)
                    reject(err)
                })
        })
    },
    loadPosition({ commit }, id) {
        return new Promise((resolve, reject) => {
            commit('setGetPositionStatus', 1)
            API.show(id)
                .then(resp => {
                    commit('setPosition', resp.data.data)
                    commit('setGetPositionStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetPositionStatus', 3)
                    reject(err)
                })
        })
    },
    loadDevicesOfPosition({ commit }, id) {
        return new Promise((resolve, reject) => {
            commit('getdevicesOfPositionStatus', 1)
            API.getDevices(id)
                .then(resp => {
                    commit('setDevicesOfPosition', resp.data.data)
                    commit('getdevicesOfPositionStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('getdevicesOfPositionStatus', 3)
                    reject(err)
                })
        })
    },
    updatePosition({ commit }, data) {
        return new Promise((resolve, reject) => {
            API.update(data.id, data)
                .then(function(resp) {
                    console.log(resp);
                    commit('setUpdatePositionStatus', 2)
                    resolve(resp)
                })
                .catch(function(err) {
                    commit('setUpdatePositionStatus', 3)
                    reject(err)
                });
        })

    },
    createPosition({ commit }, data) {
        return new Promise((resolve, reject) => {
            commit('setCreatePositionStatus', 1)
            API.store(data)
                .then(function(resp) {
                    commit('setCreatePositionStatus', 2)
                    resolve(resp)
                })
                .catch(function() {
                    commit('setCreatePositionStatus', 3)
                    reject(err)
                });
        })
    },
    deletePosition({ dispatch }, id){
        return new Promise((resolve, reject) => {
            API.delete(id)
                .then(resp => {
                    console.log(resp)
                    dispatch('loadPositions')
                    resolve(resp)
                })
                .catch(err => {
                    reject(err)
            })
        })
    },

}