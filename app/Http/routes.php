<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['uses' => 'HomeController@index']);
    Route::get('hikes', ['uses' => 'HomeController@hikes', 'as' => 'hikes']);
    Route::get('about', ['uses' => 'HomeController@about', 'as' => 'about']);
    Route::get('hike/{id}/about', ['uses' => 'HikesController@hikeDetails', 'as' => 'about_hike']);
    Route::get('hikes/smarna-gora/prijava', ['uses' => 'HikesController@prijava']);
    Route::post('hikes/smarna-gora/prijava', ['uses' => 'HikesController@prijavaSave']);
    Route::get('hikes/participants', ['uses' => 'HikesController@seznamVseh', 'as' => 'participants']);
    Route::get('dashboard', ['uses' => 'DashboardController@dashboard', 'as' => 'dashboard']);
    Route::get('dashboard/hiker-management', ['uses' => 'DashboardController@hikerPanel', 'as' => 'hiker_panel']);
    Route::post('create/hiker-type', ['uses' => 'DashboardController@saveHikerType', 'as' => 'create_hiker_type']);
    Route::get('add/hiker', ['uses' => 'DashboardController@addHiker', 'as' => 'add_hiker']);
    Route::post('add/hiker', ['uses' => 'DashboardController@saveHiker']);
    Route::get('dashboard/hike-management', ['uses' => 'HikesController@hikePanel', 'as' => 'hike_panel']);
    Route::get('add/hike', ['uses' => 'HikesController@addHike', 'as' => 'add_hike']);
    Route::post('add/hike', ['uses' => 'HikesController@saveHike']);
});
