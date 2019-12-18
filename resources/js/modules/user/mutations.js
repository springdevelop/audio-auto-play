export default {
    setGetUsersStatus: (state, status) => state.getUsersStatus = status,
    setGetUserStatus: (state, status) => state.getUserStatus = status,
    setUsers: (state, users) => state.users = users,
    setUser: (state, device) => state.user = user,
    setCreateUserStatus: (state, status) => state.createStatus = status,
    setUpdateUserStatus: (state, status) => state.updateUserStatus = status,
    deleteUserStatus: (state, status) => state.deleteUserStatus = status,
}