/*
|-------------------------------------------------------------------------------
| VUEX modules/loading.js
|-------------------------------------------------------------------------------
| The Vuex data store for the modal componet
*/

export const loading = {
    state: {
        isLoading: false,
    },
    actions: {
        makeLoading({ commit }, data) {
            commit('setLoading', data)
        }
    },
    mutations: {
        setLoading(state, data) {
            state.isLoading = data
        }
    },
    getters: {
        getLoading: state => state.isLoading,
    }
}