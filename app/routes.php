<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::post('login', ['as' => 'login', 'uses' => 'AuthController@postLogin']);

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logOut']);

Route::get('dashboard', ['as' => 'register', 'uses' => 'DashboardController@index']);

Route::post('dashboard', ['as' => 'addUser', 'uses' => 'DashboardController@registerUser']);

Route::post('dashboard', ['as' => 'ajaxUser', 'uses' => 'DashboardController@ajaxUser']);