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
        Route::put('positions/{id}', 'PositionController@update');
        Route::delete('positions/{id}', 'PositionController@destroy');
    });
});