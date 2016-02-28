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

Route::get('auth/login', function () {
    return view('auth/login');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//admin
Route::group(['prefix' => 'admin','middleware' => 'auth','namespace' => 'Admin'], function() {    

    
    #dashboard
    Route::get('/', 'DashboardController@index');
    Route::get('dashboard', 'DashboardController@index');

    #user
    Route::get('users', 'UserController@index');
    Route::get('users/data', 'UserController@data');
    Route::get('users/create' , 'UserController@getCreate');
    Route::post('users/create' , 'UserController@postCreate');
    Route::get('users/{id}/edit' , 'UserController@getEdit');
    Route::post('users/{id}/edit' , 'UserController@postEdit');
    Route::get('users/{id}/delete' , 'UserController@postDelete');
});



