/*
    Imports the  API URL from the config.
*/
import { CONFIG } from '../config.js';

export default {
    all: () => axios.get(CONFIG.API_URL + '/devices'),
    index: () => axios.get(CONFIG.API_URL + '/devices'),
    show: (id) => axios.get(CONFIG.API_URL + '/devices/' + id),
    store: (data) => axios.post(CONFIG.API_URL + '/devices', data),
    update: (id, data) => axios.put(CONFIG.API_URL + '/devices/' + id, data),
    delete: (id) => axios.delete(CONFIG.API_URL + '/devices/' + id)
}