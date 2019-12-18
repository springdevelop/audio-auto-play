export default {
    isLoggedIn: state => !!state.token,
    authStatus: state => state.status,
    me: state => state.me,
    isAdmin: state => state.me.role == 'admin'
}
