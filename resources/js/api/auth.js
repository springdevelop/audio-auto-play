/*
    Imports the HUEIC AUTH URL from the config.
*/
import { CONFIG } from '../config.js';
const token = localStorage.getItem('token') || '';
export default {

    /*
    Get     /api/auth/login
    check isLogin or not
    */
    checkLogin: function(){
        return axios.get( CONFIG.API_AUTH + '/auth/login' );
    },
    /*
    POST     /api/auth/login
    */
    postLogin: function( user ){
        return axios.post( CONFIG.API_AUTH + '/auth/login', user );
    },

    /*
    POST     /api/auth/logout
    */
    postLogout: function( token ){
        return axios.post( CONFIG.API_AUTH + '/logout', {
            token: token
        });
    },

    /*
    POST    /api/auth/register
    */
    postRegister: function( user ){
        return axios.post( CONFIG.API_AUTH + '/register', user );
    },

     /*
    POST    /api/auth/refresh
    */
    postRefresh: function( user ){
        return axios.post( CONFIG.API_AUTH + '/refresh', user );
    },

     /*
    POST    /api/auth/me
    */
    postMe: function(token){
        return axios.post( CONFIG.API_AUTH + '/user/me', {
            token: token
        });
    },
}
