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

    Route::group(['middleware' => ['api']], function () {
        Route::put('user/me', 'UsersController@updateProfile');
        Route::get('user/me', 'UsersController@getCurrentUser');

        Route::get('positions', 'PositionController@index');
        Route::get('positions/{id}', 'PositionController@show');
        Route::post('positions', 'PositionController@store');
        Route::put('positions/{id}', 'PositionController@update');
        Route::delete('positions/{id}', 'PositionController@destroy');

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
    });
});