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


Route::resource('api/v1/task', 'TaskController',[
	'only' => [
		'index', 'store', 'update', 'destroy'
	]
]);


Route::group(['prefix' => 'api/v1', 'middleware' => 'cors'], function() {

	Route::resource('authenticate', 'AuthenticateController', [
		'only' => [
			'index'
		]
	]);
    Route::post('authenticate', 'AuthenticateController@authenticate');

    Route::resource('task', 'TaskController',[
		'only' => [
			'index', 'store', 'update', 'destroy'
		]
	]);

    Route::resource('user', 'UserController',[
        'only' => [
            'index', 'store', 'update', 'destroy'
        ]
    ]);

});