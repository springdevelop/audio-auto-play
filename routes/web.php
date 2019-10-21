<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Route::get('/', function () {
	// $role = Role::find(1);
	// $user = User::find(1);
	// $user->assignRole($role);
    return view('app');
});
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
