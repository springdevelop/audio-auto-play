/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/users.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/users.js';

export default {
    loadUsers({ commit }) {
        return new Promise((resolve, reject) => {
            commit('setGetUsersStatus', 1)
            API.index()
                .then(resp => {
                    commit('setUsers', resp.data.data)
                    commit('setGetUsersStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetUsersStatus', 3)
                    reject(err)
                })
        })
    },
    loadUser({ commit }, id) {
        return new Promise((resolve, reject) => {
            commit('setGetUserStatus', 1)
            API.show(id)
                .then(resp => {
                    commit('setUser', resp.data.data)
                    commit('setGetUserStatus', 2)
                    resolve(resp)
                })
                .catch(err => {
                    commit('setGetUserStatus', 3)
                    reject(err)
                })
        })
    },
    updateUser({ commit }, data) {
        return new Promise((resolve, reject) => {
            commit('setUpdateUserStatus', 1)
            API.update(data.id, data)
                .then(function(resp) {
                    commit('setUpdateUserStatus', 2)
                    resolve(resp)
                })
                .catch(function(err) {
                    commit('setUpdateUserStatus', 3)
                    reject(err)
                });
        })

    },
}