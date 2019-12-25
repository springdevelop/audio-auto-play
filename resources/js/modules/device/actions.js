/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/devices.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/devices.js';

export default {
    initDevice({ commit }, positions_id = null) {
        return new Promise((resolve) => {
            let device = { 
                id: 0,
                code: null,
                name: 'Nhập tên thiết bị', 
                desc: 'Nhập mô tả ngắn', 
                positions_id : positions_id
            }
            commit('setDevice', device)
            resolve(device)
        })
    },
    initDevices({ commit }) {
        commit('setDevices', [])
    },
    loadDevices({ commit }) {
        return new Promise((resolve, reject) => {
            commit('setGetDevicesStatus', 1)
            API.all()
                .then(resp => {
                    commit('setDevices', resp.data.data)
                    commit('setGetDevicesStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetDevicesStatus', 3)
                    reject(err)
                })
        })
    },
    loadDevice({ commit }, id) {
        return new Promise((resolve, reject) => {
            commit('setGetDeviceStatus', 1)
            API.show(id)
                .then(resp => {
                    commit('setDevice', resp.data.data)
                    commit('setGetDeviceStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetDeviceStatus', 3)
                    reject(err)
                })
        })
    },
    updateDevice({ commit }, data) {
        return new Promise((resolve, reject) => {
            API.update(data.id, data)
                .then(function(resp) {
                    console.log(resp)
                    commit('setUpdateDeviceStatus', 2)
                    resolve(resp)
                })
                .catch(function(err) {
                    commit('setUpdateDeviceStatus', 3)
                    reject(err)
                });
        })

    },
    createDevice({ commit }, data) {
        return new Promise((resolve, reject) => {
            commit('setCreateDeviceStatus', 1)
            API.store(data)
                .then(function(resp) {
                    commit('setCreateDeviceStatus', 2)
                    resolve(resp)
                })
                .catch(function() {
                    commit('setCreateDeviceStatus', 3)
                    reject(err)
                });
        })
    },
    deleteDevice({ dispatch }, id){
        return new Promise((resolve, reject) => {
            API.delete(id)
                .then(resp => {
                    console.log(resp)
                    dispatch('loadDevices')
                    resolve(resp)
                })
                .catch(err => {
                    reject(err)
            })
        })
    },

}