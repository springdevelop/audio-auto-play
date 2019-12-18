export default {
    setGetPositionsStatus: (state, status) => state.getPositionsStatus = status,
    setGetPositionStatus: (state, status) => state.getPositionStatus = status,
    setPositions: (state, positions) => state.positions = positions,
    setDevicesOfPosition: (state, devices) => state.devicesOfPosition = devices,
    setPosition: (state, position) => state.position = position,
    setCreatePositionStatus: (state, status) => state.createPositionStatus = status,
    getdevicesOfPositionStatus: (state, status) => state.getdevicesOfPositionStatus = status,
    setUpdatePositionStatus: (state, status) => state.updatePositionStatus = status,
    deletePositionStatus: (state, status) => state.deletePositionStatus = status,
}