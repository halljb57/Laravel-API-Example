<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix' => '/api', 'middleware' => ['cors']], function () {

    Route::resource('courses', 'CourseController', ['except' => [
        'create', 'edit'
    ]]);

    Route::resource('collections', 'CollectionNameController');
    Route::resource('addresses', 'AddressController');
});

