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





  Route::get('/', 'RoomsController@index');

    Route::get('/rooms', 'RoomsController@index');

    Route::get('/rooms/search', 'RoomsController@search');

    Route::get('/rooms/story', 'RoomsController@story');

    Route::get('/rooms/search/{id}', 'RoomsController@show');

