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

Route::get('/', 'MenusController@index');

Route::group(array('prefix' => 'menus'), function() {
    Route::get('/index', [
        'uses' => 'MenusController@index', 'as' => 'menus.index'
    ]);
    Route::post('/create', [
        'uses' => 'MenusController@create',
        'as' => 'menus.create',
        'middleware' => 'auth'
    ]);
});

Route::group(array('prefix' => 'users'), function() {
   Route::get('/index', [
       'uses' => 'UsersController@index', 'as' => 'users.index',
       'middleware' => 'auth'
    ]);
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');