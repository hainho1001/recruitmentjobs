<?php

use Illuminate\Support\Facades\Route;

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



//Auth
Route::group(['namespace' => 'Auth'], function () {
    //login
	Route::get('login/', 'LoginController@getLogin')->name('login');
	Route::post('login','LoginController@postLogin')->name('post.login');
	Route::get('logout','LoginController@getLogout')->name('logout');

    //Register
    Route::get('register', 'RegisterController@getRegister')->name('register');
    Route::get('register-company', 'RegisterController@registerCompany')->name('registerCompany');
    Route::post('register', 'RegisterController@postRegister')->name('post.register');
});


//Admin
Route::group(['middleware'=>['auth', 'adminLogin'], 'namespace' => 'Admin'], function(){
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {

    	Route::get('/', 'DashboardController@index')->name('index');
        //Company
        Route::group(['prefix' => 'companies', 'as' => 'companies.'], function () {
            Route::get('/', 'CompanyController@index')->name('index');
            Route::get('/{id}', 'CompanyController@show')->name('show');
            Route::delete('/{id}', 'CompanyController@destroy')->name('delete');
        });
        //job
        Route::group(['prefix' => 'jobs', 'as' => 'jobs.'], function () {
            Route::get('/', 'JobController@index')->name('index');
            Route::get('/{id}', 'JobController@show')->name('show');
            Route::delete('/{id}', 'JobController@destroy')->name('delete');
        });
        //user company
        Route::group(['prefix' => 'users-company', 'as' => 'users-company.'], function () {
            Route::get('/', 'UserCompanyController@index')->name('index');
            Route::delete('/{id}', 'UserCompanyController@destroy')->name('delete');
        });
        //user client
        Route::group(['prefix' => 'users-client', 'as' => 'users-client.'], function () {
            Route::get('/', 'UserClientController@index')->name('index');
            Route::delete('/{id}', 'UserClientController@destroy')->name('delete');
        });

    });
});

//Company
Route::group(['middleware'=>['auth', 'clientLogin'], 'namespace' => 'Company', 'prefix' => 'company-profile'], function(){
    //company
	Route::resource('companies', 'CompanyController');
    //job
	Route::resource('jobs', 'JobController');
    //userjob
    Route::group(['prefix' => 'userjob', 'as' => 'userjob.'], function () {
        Route::get('/{id}', 'UserJobController@index')->name('index');
        Route::get('/{id}/show', 'UserJobController@show')->name('show');
        Route::delete('/{id}', 'UserJobController@destroy')->name('delete');
    });
});


//Client
Route::group(['namespace' => 'Client', 'as' => 'client.'], function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::group(['middleware'=>['auth', 'login'], 'prefix' => 'user-job', 'as' => 'user-job.'], function(){
        Route::get('/{id}', 'UserJobController@index')->name('index');
        Route::post('/{id}', 'UserJobController@postResume')->name('post');
    });
    
    //company
    Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
        Route::get('/', 'CompanyController@index')->name('index');
        Route::get('/{id}', 'CompanyController@show')->name('show');
    });
    //job
    Route::group(['prefix' => 'job', 'as' => 'job.'], function () {
        Route::get('/', 'JobController@index')->name('index');
        Route::get('/{id}', 'JobController@show')->name('show');
    });
});  