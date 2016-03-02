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

Route::get('/', ['uses' => 'HomeController@index']);
Route::get('hikes', ['uses' => 'HomeController@hikes']);
Route::get('about', ['uses' => 'HomeController@about']);
Route::get('hikes/smarna-gora', ['uses' => 'HikesController@smarnaGoraHike']);
Route::get('hikes/smarna-gora/prijava', ['uses' => 'HikesController@prijava']);
Route::post('hikes/smarna-gora/prijava', ['uses' => 'HikesController@prijavaSave']);
Route::get('hikes/seznam-vseh', ['uses' => 'HikesController@seznamVseh']);
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
    //
});
