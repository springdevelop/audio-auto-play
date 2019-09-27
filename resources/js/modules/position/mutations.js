export default {
    setGetPositionsStatus: (state, status) => state.getPositionsStatus = status,
    setGetPositionStatus: (state, status) => state.getPositionStatus = status,
    setPositions: (state, positions) => state.positions = positions,
    setPosition: (state, position) => state.position = position,
    setCreatePositionStatus: (state, status) => state.createPositionStatus = status,
    setUpdatePositionStatus: (state, status) => state.updatePositionStatus = status,
    deletePositionStatus: (state, status) => state.deletePositionStatus = status,
}