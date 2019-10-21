export default {
    setGetStationsStatus: (state, status) => state.getStationsStatus = status,
    setGetStationStatus: (state, status) => state.getStationStatus = status,
    setStations: (state, stations) => state.stations = stations,
    setStation: (state, station) => state.station = station,
    setCreateStationStatus: (state, status) => state.createStationStatus = status,
    setUpdateStationStatus: (state, status) => state.updateStationStatus = status,
    deleteStationStatus: (state, status) => state.deleteStationStatus = status,
}