/*
    Imports the  API URL from the config.
*/
import { CONFIG } from '../config.js';

export default {
    index: () => axios.get(CONFIG.API_URL + '/users'),
    show: (id) => axios.get(CONFIG.API_URL + '/users/' + id),
    store: (data) => axios.post(CONFIG.API_URL + '/users', data),
    update: (id, data) => axios.put(CONFIG.API_URL + '/users/' + id, data),
    delete: (id) => axios.delete(CONFIG.API_URL + '/users/' + id)
}