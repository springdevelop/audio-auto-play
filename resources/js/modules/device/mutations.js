export default {
    setGetDevicesStatus: (state, status) => state.getDevicesStatus = status,
    setGetDeviceStatus: (state, status) => state.getDeviceStatus = status,
    setDevices: (state, devices) => state.devices = devices,
    setDevice: (state, device) => state.device = device,
    setCreateDeviceStatus: (state, status) => state.createDeviceStatus = status,
    setUpdateDeviceStatus: (state, status) => state.updateDeviceStatus = status,
    deleteDeviceStatus: (state, status) => state.deleteDeviceStatus = status,
}