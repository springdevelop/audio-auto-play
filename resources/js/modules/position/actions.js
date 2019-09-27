/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/positions.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/positions.js';

export default {
    initPosition({ commit }) {
        return new Promise((resolve, reject) => {
            commit('setGetPositionStatus', 0)
            var position = { id: null, name: 'Nhập tên', desc: 'Nhập mô tả ngắn', parent_id: 0, groups_id: 0, users_id: null }
            commit('setPosition', position)
            resolve(position)
        })
    },
    loadPositions({ commit }) {
        return new Promise((resolve, reject) => {
            commit('setGetPositionsStatus', 1)
            API.index()
                .then(resp => {
                    commit('setPositions', resp.data)
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
    updatePosition({ commit }, data) {
        commit('setUpdatePositionStatus', 1)
        API.update(data.id, data)
            .then(function(resp) {
                commit('setUpdatePositionStatus', 2)
            })
            .catch(function() {
                commit('setUpdatePositionStatus', 3)
            });
    },
    createPosition({ commit }, data) {
        commit('setCreatePositionStatus', 1)
        API.store(data)
            .then(function(resp) {
                commit('setCreatePositionStatus', 2)
            })
            .catch(function() {
                commit('setCreatePositionStatus', 3)
            });
    },

}