/*
    Imports the  API URL from the config.
*/
import { CONFIG } from '../config.js';

export default {
    index: () => axios.get( CONFIG.API_URL + '/calendars'),
    show: (id) => axios.get( CONFIG.API_URL + '/calendars/'+id),
    store: (data) => axios.post( CONFIG.API_URL + '/calendars', data),
    update: (id, data) => axios.put( CONFIG.API_URL + '/calendars/'+id, data),
    delete: (id) => axios.delete( CONFIG.API_URL + '/calendars/'+id)
    
}