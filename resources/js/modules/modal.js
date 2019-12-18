/*
|-------------------------------------------------------------------------------
| VUEX modules/modal.js
|-------------------------------------------------------------------------------
| The Vuex data store for the modal componet
*/

export const modal = {
    state: {
        modal_component: '',
        modal_title: '',
        modal_submit: '',
        back_component: {}
    },
    actions: {
        makeModalComponent({ commit }, data) {
            commit('setComponent', data.name)
            commit('setTitle', data.title)
            commit('setSubmit', data.submit)
            let back_component = {}
            if (data.back_component) {
                back_component.modal_title = data.back_component.title
                back_component.modal_component = data.back_component.name
            }
            commit('setBack', back_component)
        },
        setModalSubmit({ commit }, submit) {
            commit('setSubmit', submit)
        },
        setModalTitle({ commit }, name) {
            commit('setTitle', name)
        }
    },
    mutations: {
        setComponent(state, modal_component) {
            state.modal_component = modal_component
        },
        setTitle(state, modal_title) {
            state.modal_title = modal_title
        },
        setSubmit(state, modal_submit) {
            state.modal_submit = modal_submit
        },
        setBack(state, back_component) {
            state.back_component = back_component
        },
    },
    getters: {
        getModalComponent: state => state.modal_component,
        getModalTitle: state => state.modal_title,
        getModalSubmit: state => state.modal_submit,
        getBackModalComponent: state => state.back_component,
    }
}