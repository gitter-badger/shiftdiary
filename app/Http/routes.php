<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Credentials: true');

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

Route::get('/', function () {
    return view('index');
});


Route::get('/api/v1/employees/{id?}', 'EmployeesController@index');
Route::post('/api/v1/employees', 'EmployeesController@store');
Route::post('/api/v1/employees/{id}', 'EmployeesController@update');
Route::delete('/api/v1/employees/{id}', 'EmployeesController@destroy');

Route::get('/api/v1/diaries/{id?}', 'DiariesController@index');
Route::post('/api/v1/diaries', 'DiariesController@store');
Route::post('/api/v1/diaries/{id}', 'DiariesController@update');
Route::delete('/api/v1/diaries/{id}', 'DiariesController@destroy');

Route::get('/api/v1/notifications/{id?}', 'NotificationsController@index');
Route::post('/api/v1/notifications', 'NotificationsController@store');
Route::post('/api/v1/notifications/{id}', 'NotificationsController@update');
Route::delete('/api/v1/notifications/{id}', 'NotificationsController@destroy');

Route::get('/api/v1/texts/{id?}', 'TextsController@index');
Route::post('/api/v1/texts', 'TextsController@store');
Route::post('/api/v1/texts/{id}', 'TextsController@update');
Route::delete('/api/v1/texts/{id}', 'TextsController@destroy');
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
