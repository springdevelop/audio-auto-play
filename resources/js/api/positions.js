/*
    Imports the  API URL from the config.
*/
import { CONFIG } from '../config.js';

export default {
    all: () => axios.get(CONFIG.API_URL + '/positions/all'),
    index: () => axios.get(CONFIG.API_URL + '/positions'),
    getDevices: (id) => axios.get(CONFIG.API_URL + '/positions/' + id +'/devices'),
    show: (id) => axios.get(CONFIG.API_URL + '/positions/' + id),
    store: (data) => axios.post(CONFIG.API_URL + '/positions', data),
    update: (id, data) => axios.put(CONFIG.API_URL + '/positions/' + id, data),
    delete: (id) => axios.delete(CONFIG.API_URL + '/positions/' + id)
}