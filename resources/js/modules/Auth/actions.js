/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/auth.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import AuthAPI from '../../api/auth.js';

export default {
      checkLogin({commit}){
        return new Promise((resolve, reject) => {
          commit('auth_request')
          AuthAPI.checkLogin()
          .then(resp => {
              const token = resp.data.access_token;
              const user = resp.data.user;
              localStorage.setItem('token', token);
              axios.defaults.headers.common['Authorization'] =  'Bearer' +token;
              commit('auth_success', { user: user, token: token});
              resolve(resp);
          })
          .catch(err => {
            commit('auth_error')
            localStorage.removeItem('token')
            reject(err)
          })
        })
    },
    login({commit}, user){
        return new Promise((resolve, reject) => {
          commit('auth_request')
          AuthAPI.postLogin(user)
          .then(resp => {
            const token = resp.data.access_token;
            const user = resp.data.user;
            localStorage.setItem('token', token);
            axios.defaults.headers.common['Authorization'] =  'Bearer' +token;
            commit('auth_success', { user: user, token: token});
            resolve(resp);
          })
          .catch(err => {
            commit('auth_error')
            localStorage.removeItem('token')
            reject(err)
          })
        })
    },

    register({commit}, user){
        return new Promise((resolve, reject) => {
          commit('auth_request')
          AuthAPI.postRegister(user)
          .then(resp => {
            const token = resp.data.token;
            const user = resp.data.user;
            localStorage.setItem('token', token);
            axios.defaults.headers.common['Authorization'] = token;
            commit('auth_success', { user: user, token: token});
            resolve(resp);
          })
          .catch(err => {
            commit('auth_error', err)
            localStorage.removeItem('token')
            reject(err)
          })
        })
      },

      logout({commit}){
        return new Promise((resolve, reject) => {
          commit('logout')
          AuthAPI.postLogout(localStorage.getItem('token'))
            .then(() =>{localStorage.removeItem('token')})
          delete axios.defaults.headers.common['Authorization']
          resolve();
        })
      },

      postMe({commit}){
        return new Promise((resolve, reject) => {
          AuthAPI.postMe(localStorage.getItem('token'))
          .then(resp => {
            const user = resp.data
            commit('post_me', user)
            resolve(resp)
          })
          .catch(err => {
            commit('auth_error')
            commit('logout')
            reject(err)
          })
          resolve()
        })
      }
}
