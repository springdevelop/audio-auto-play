export default {
    auth_request(state){
        state.status = 'loading'
    },

    auth_success (state, data){
        state.status = 'success'
        state.token = data.token
        state.me = data.user
    },
    post_me(state, user){
        state.status = 'Post Me success'
        state.me = user
    },
    auth_error(state){
        state.status = 'error'
    },

    logout(state){
        state.status = 'Logout'
        state.token = ''
    }

}
