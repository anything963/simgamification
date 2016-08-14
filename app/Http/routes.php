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
    return view('index');
});

Route::get('/user/{id?}', 'HomeController@userDetails');
Route::get('/badges/{id}', 'HomeController@userBadges');
Route::get('/badges', 'HomeController@allBadges');
Route::get('/checklist/{id}', 'HomeController@userChecklist');
Route::get('/leaderboard', 'HomeController@leaderboard');
Route::post('/badges/update', 'HomeController@updateBadges');

Route::get('/simulations', 'SimulationsController@simulations');
