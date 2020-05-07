<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cities', 'CityController@index');
Route::post('cities', 'CityController@store');
Route::delete('cities/{id}', 'CityController@destroy');
Route::put('cities/{city}', 'CityController@update' );

Route::get('employees', 'EmployeeController@index');
Route::post('employees', 'EmployeeController@store');
Route::delete('employees/{id}', 'EmployeeController@destroy');
Route::put('employees/{employee}', 'EmployeeController@update' );

Route::get('cars', 'CarController@index');
Route::post('cars', 'CarController@store');
Route::delete('cars/{id}', 'CarController@destroy');
Route::put('cars/{car}', 'CarController@update' );

Route::get('permits', 'PermitController@index');
Route::post('permits', 'PermitController@store');
Route::delete('permits/{id}', 'PermitController@destroy');
Route::put('permits/{permit}', 'PermitController@update' );


Route::get('drivers', 'DriverController@index');
Route::post('drivers', 'DriverController@store');
Route::delete('drivers/{id}', 'DriverController@destroy');
Route::put('drivers/{driver}', 'DriverController@update' );

Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store');
Route::delete('users/{id}', 'UserController@destroy');
Route::put('users/{user}', 'UserController@update' );










/*Route::resource('cities', 'CityController');*/

