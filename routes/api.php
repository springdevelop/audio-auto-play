<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'Api'], function () {
    Route::post('user/register', 'UsersController@register');
    Route::post('auth/login', 'AuthController@login');

    // Route::group(['middleware' => ['api','role:admin']], function () {
        Route::put('user/me', 'UsersController@updateProfile');
        Route::get('user/me', 'UsersController@getCurrentUser');

        Route::get('positions', 'PositionController@index');
        Route::get('positions/all', 'PositionController@tree');
        Route::get('positions/{id}', 'PositionController@show')->where('id','[0-9]+');
        Route::post('positions', 'PositionController@store');
        Route::put('positions/{id}', 'PositionController@update')->where('id','[0-9]+');
        Route::delete('positions/{id}', 'PositionController@destroy');
        Route::get('positions/{id}/devices', 'PositionController@devices');

        Route::get('groups', 'GroupController@index');
        Route::get('groups/{id}', 'GroupController@show');
        Route::post('groups', 'GroupController@store');
        Route::put('groups/{id}', 'GroupController@update');
        Route::delete('groups/{id}', 'GroupController@destroy');

        Route::get('devices', 'DeviceController@index');
        Route::get('devices/{id}', 'DeviceController@show');
        Route::post('devices', 'DeviceController@store');
        Route::put('devices/{id}', 'DeviceController@update');
        Route::delete('devices/{id}', 'DeviceController@destroy');

        Route::get('troubles', 'TroubleController@index');
        Route::get('troubles/{id}', 'TroubleController@show');
        Route::post('troubles', 'TroubleController@store');
        Route::put('troubles/{id}', 'TroubleController@update');
        Route::delete('troubles/{id}', 'TroubleController@destroy');

        Route::get('tasks', 'TaskController@index');
        Route::get('tasks/{id}', 'TaskController@show');
        Route::post('tasks', 'TaskController@store');
        Route::put('tasks/{id}', 'TaskController@update');
        Route::delete('tasks/{id}', 'TaskController@destroy');

        Route::get('siteinfos', 'SiteInfoController@index');
        Route::get('siteinfos/{id}', 'SiteInfoController@show');
        Route::post('siteinfos', 'SiteInfoController@store');
        Route::put('siteinfos/{id}', 'SiteInfoController@update');
        Route::delete('siteinfos/{id}', 'SiteInfoController@destroy');

        Route::get('calendars', 'CalendarController@index');
        Route::get('calendars/{id}', 'CalendarController@show');
        Route::post('calendars', 'CalendarController@store');
        Route::put('calendars/{id}', 'CalendarController@update');
        Route::delete('calendars/{id}', 'CalendarController@destroy');

        /**====================
        * Api azuracast
        ======================*/

        /**====================
        * Stations: Nowplaying
        =====================*/

        Route::get('nowplayings', 'AzuracastController@getNowPlayings');
        Route::get('nowplaying/{station_id}', 'AzuracastController@getNowPlaying');

        /*
        =============================================
        * Stations: General
        =============================================
        */

        Route::get('stations', 'AzuracastController@getStations');
        Route::get('station/{station_id}', 'AzuracastController@getStation');

        /*
        =============================================
        * Stations: Song Requests
        =============================================
        */

        Route::get('station/{station_id}/requests', 'AzuracastController@getStationRequests');
        Route::post('station/{station_id/request/{request_id}', 'AzuracastController@postStationRequest');

        /*
        =============================================
        * Stations: Service Control
        =============================================
        */

        Route::get('station/{station_id}/status', 'AzuracastController@getStationStatus');
        Route::get('station/{station_id}/restart', 'AzuracastController@postStationRestart');
        Route::get('station/{station_id}/frontend/{action}', 'AzuracastController@postStationFrontend');
        Route::get('station/{station_id}/backend/{action}', 'AzuracastController@postStationBackend');

        /*
        =============================================
        * Stations: History
        =============================================
        */

        Route::get('station/{station_id}/history', 'AzuracastController@getStationHistory');

        /*
        =============================================
        * Stations: Listeners
        =============================================
        */

        Route::get('station/{station_id}/listeners', 'AzuracastController@getStationListeners');

        /*
        =============================================
        * Stations: Playlists
        =============================================
        */

        Route::get('station/{station_id}/playlists', 'AzuracastController@getStationPlaylists');
        Route::get('station/{station_id}/playlist/{playlist_id}', 'AzuracastController@getStationPlaylist');
            
    // });
});