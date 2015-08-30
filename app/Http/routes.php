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

Route::get('/', function () {
    return view('welcome');
});


get('view/{id}', 'PageViewController@show');

$router->group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    resource('page', 'PageController');
    resource('video', 'VideoController');
});

get('auth/login', 'Auth\AuthController@getLogin');
post('auth/login', 'Auth\AuthController@postLogin');
get('auth/logout', 'Auth\AuthController@getLogout');