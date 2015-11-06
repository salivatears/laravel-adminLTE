<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
Route::get('home', function () {
    return view('welcome');
});
*/

 // admin
                        Route::get ( 'home', [
                        'middleware' => 'auth',
                        'uses' => 'HomeController@index'
                        ]);


Route::get('admin', function () {
    return view('admin_template');
});

Route::get('origadmin', function () {
    return view('admin_template2');
});

