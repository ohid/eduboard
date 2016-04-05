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


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('/', 'ResultsController@index');
Route::post('result', ['as' => 'result', 'uses'=> 'ResultsController@search']);

/**
 * Admin Routes
 */
Route::group(['prefix' => 'admin'], function() {

	Route::resource('dashboard', 'Dashboard\DashboardController');
	Route::resource('result', 'Dashboard\ResultController', ['except' => 'show']);
	Route::resource('year', 'Dashboard\YearController', ['except' => 'show']);
	Route::resource('examination', 'Dashboard\ExaminationController', ['except' => 'show']);
	Route::resource('board', 'Dashboard\BoardController', ['except' => 'show']);

});