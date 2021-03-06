<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('list', 'UsersController@list');

Route::post('login', 'API\Auth\AuthController@login');
Route::post('register', 'API\Auth\AuthController@register');

Route::group(['middleware' => 'auth:api'], function(){
	Route::post('saveuserinfo', 'API\Auth\AuthController@saveuserinfo');
	Route::get('logout', 'API\Auth\AuthController@logout');
});
Route::get('company', 'API\Auth\CompanyController@index');
Route::get('slider', 'API\Auth\CompanyController@slider');

Route::get('job', 'API\Auth\CompanyController@indexx');
